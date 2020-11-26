<?php include('./header.php'); ?>
    <div class="container">
        <?php if(isset($_SESSION['question_added']) && $_SESSION['question_added']) { ?>
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                Jūsų klausimas pridėtas sėkmingai. Kai klausimas bus patvirtintas, jis bus rodomas tarp kitų klausimyno klausimų.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
        <?php
            $_SESSION['question_added'] = false;
        }
        ?>
        <button class="btn btn-primary my-3 d-none" onClick="loadDoc()" id="newQuiz">Bandyti dar kartą</button>
        <a class="btn btn-primary my-3" href="add_question.php">Pridėti klausimą</a>
        <div class="progress-container" style="display: none">
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="text-right" id="progress-label"></div>
        </div>
    </div>
    <div class="container mt-3" id="quiz-container">
        
    </div>
    <div class="d-flex justify-content-center align-items-center" id="spinnerContainer">
        <div class="spinner-grow text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div class="modal" id="alertModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
            <div class="modal-body">
                <p>Privaloma atsakyti į visus klausimus!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Uždaryti</button>
            </div>
            </div>
        </div>
    </div>

        <script>
        $('#alertModal').on('hide.bs.modal', function (e) {
            $("#submitQuiz").removeClass("d-none");
            $.when($(".spinner-grow").fadeOut(600)).done(function() {
                triggerSpinnerContainerHeight();
                $('#quiz-container').fadeIn();  
            });
        })
        var first = true; 
        $(document).ready(function(){
            loadDoc();
        });
        var first = true;
        function loadDoc() {
            $("#newQuiz").addClass('d-none');
            $('.progress-container').fadeOut();
            triggerSpinnerContainerHeight();
            $(".spinner-grow").fadeIn();
            if(!first) {
                $('#quiz-container').fadeOut();
            } else {
                first = false;
                $('#quiz-container').fadeOut(1);
            }
            $.ajax({
                url: "./include/quizFunctions.php", 
                data: { getHTML: true },
                dataType:'JSON',
                success: function(result){
                    first = true;
                    $('#quiz-container').html('');
                    var form = $("<form id='quizForm'>");
                    var accordion = $("<div id='accordion'>").addClass("accordion");
                    form.append(accordion);
                    $('#quiz-container').append(form);
                    var questions = result.questions;
                    questions.forEach(el => {
                        addQuestion(el);
                    });
                    var submitButton = $("<button type='button' onClick='submitAnswers()' id='submitQuiz'>").addClass('btn btn-primary float-right mt-2').html("Tikrinti");
                    $('#quiz-container').append(submitButton);
                    $.when($(".spinner-grow").fadeOut(600)).done(function() {
                        triggerSpinnerContainerHeight();
                        $('#quiz-container').fadeIn();  
                    });
                },
                error: function(result){
                    console.log(result);
                }
            });
        }
        
        function addQuestion(q) {
            var div = $("<div>").addClass("card");
            var header = $("<div id='heading" + q.id + "'>").addClass("card-header row");
            var button = $("<button type='button' data-toggle='collapse' data-target='#collapse" + q.id + "' aria-controls='collapse" + q.id + "'>").addClass("btn btn-link btn-block text-left col-10").html(q.id + ". " + q.question);
            header.append(button);
            div.append(header);

            var collapse = $("<div id='collapse" + q.id + "' aria-labelledby='heading" + q.id + "'>").addClass("collapse collapse-question");
            if(first) {
                collapse.addClass("show");
                first = false;
            }
            var totalAnswers = q.answers.length;
            if(q.type == 0) {
                var className = "col-md-" + 12/totalAnswers;
                var row = $("<div>").addClass("row py-4 px-5");
                (q.answers).forEach( answ => {
                    var radioButton = $("<input type='radio' name='" + q.question_id + "' value='" + answ.id + "' id='" + answ.id + "'>").addClass("mr-1");
                    var label = $("<label for='" + answ.id + "'>").html(" " + answ.answer);
                    var answer = $("<div name='" + answ.id + "'>").addClass(className).append(radioButton).append(label);
                    row.append(answer);
                });
                collapse.append(row);
            } else {
                var container = $("<div>").addClass("py-4 px-5");
                (q.answers).forEach( answ => {
                    var radioButton = $("<input type='radio' name='" + q.question_id + "' value='" + answ.id + "' id='" + answ.id + "'>").addClass("mr-1");
                    var label = $("<label for='" + answ.id + "'>").html(" " + answ.answer);
                    var answer = $("<div name='" + answ.id + "'>").append(radioButton).append(label);
                    container.append(answer);
                });
                collapse.append(container);
            }

            div.append(collapse);
            $('#accordion').append(div);
        }

        function submitAnswers() {
            var validated = true;
            $("#submitQuiz").addClass("d-none");
            $.when($('#quiz-container').fadeOut()).done(function() {
                triggerSpinnerContainerHeight();
                $(".spinner-grow").fadeIn();
            });
            $('.collapse-question').each( function() {
                var heading = $(this).prev();
                heading.find('img').remove();
                if($(this).find('input[type="radio"]:checked').length == 0) {
                    var img = $('<img src="./img/svg/bookmark-x.svg" alt="" width="32" height="32">').addClass('col-2 mt-1 float-right');
                    heading.append(img);
                    validated = false;
                } 
            });
            if(!validated) {
                $("#alertModal").modal('show');
            } else {
                $.ajax({
                    url: "./include/quizFunctions.php", 
                    data: $('#quizForm').serialize(),
                    dataType:'JSON',
                    method:'POST',
                    success: function(result){
                        $('input[type="radio"]').attr('disabled', 'disabled');
                        (result.questions).forEach( q => {
                            if(q.checked == q.correct) {
                                var img = $('<img src="./img/svg/bookmark-check.svg" alt="" width="32" height="32">').addClass('col-2 mt-1 float-right');
                            } else {
                                var img = $('<img src="./img/svg/bookmark-x.svg" alt="" width="32" height="32">').addClass('col-2 mt-1 float-right');
                                $("div[name=\"" + q.checked + "\"]").addClass("text-danger");
                            }
                            var heading = $("input[name=\"" + q.question_id + "\"]").parent().parent().parent().prev();
                            heading.append(img);
                            $("div[name=\"" + q.correct + "\"]").addClass("text-success");
                        });
                        $.when($(".spinner-grow").fadeOut(600)).done(function() {
                            triggerSpinnerContainerHeight();
                            $('.progress-container').fadeIn();
                            $('#progress-label').html(parseInt(result.progress) + " / 100%");
                            $('.progress-bar').css('width', parseInt(result.progress) + "%");
                            $('.progress-bar').attr('aria-valuenow', parseInt(result.progress));
                            $('#quiz-container').fadeIn();  
                            $('#newQuiz').removeClass("d-none");
                        });
                    },
                    error: function(result){
                        console.log(result);
                    }
                });
            }
        }

        function triggerSpinnerContainerHeight() {
            if($("#spinnerContainer").hasClass("h-75")) {
                $("#spinnerContainer").removeClass("h-75");
                $("#spinnerContainer").removeClass("d-flex");
                $("#spinnerContainer").addClass("h-0");
                $("#spinnerContainer").addClass("d-none");
            } else {
                $("#spinnerContainer").removeClass("h-0");
                $("#spinnerContainer").removeClass("d-none");
                $("#spinnerContainer").addClass("d-flex");
                $("#spinnerContainer").addClass("h-75");
            }
        }
    </script>
<?php include('./footer.php');?>