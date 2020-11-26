<?php include('./header.php'); ?>
    <div class="container">
        <h4 class="my-3 border-bottom">Pridėti klausimą</h4>
        <form action="submit_add_question.php" method="POST" id="submitQuestionForm" class="px-2">
            <div class="form-group">
                <label for="question">Klausimas</label>
                <textarea class="form-control" id="question" placeholder="Klausimas" name="question" required></textarea>
            </div>
            <div class="form-group px-1">
                <label for="question">Atsakymus rodyti: </label><br>
                <input type="radio" value="0" name="question_type" required/> Eilute
                <input type="radio" value="1" name="question_type" /> Stulpeliu
            </div>
            <div class="form-group">
                <label for="answer1">Atsakymas 1</label>
                <input type="text" class="form-control" name="answer1" placeholder="1 atsakymas" required>
                <input type="radio" class="ml-2 mt-1" value="answer1" name="correct_answer" required/> Teisingas
            </div>
            <div class="form-group">
                <label for="answer1">Atsakymas 2</label>
                <input type="text" class="form-control" name="answer2" placeholder="2 atsakymas" required>
                <input type="radio" class="ml-2 mt-1" value="answer2" name="correct_answer" /> Teisingas
            </div>
            <div class="form-group">
                <label for="answer1">Atsakymas 3</label>
                <input type="text" class="form-control" name="answer3" placeholder="3 atsakymas">
                <input type="radio" class="ml-2 mt-1" value="answer3" name="correct_answer" /> Teisingas
            </div>
            <div class="form-group">
                <label for="answer1">Atsakymas 4</label>
                <input type="text" class="form-control" name="answer4" placeholder="4 atsakymas">
                <input type="radio" class="ml-2 mt-1" value="answer4" name="correct_answer" /> Teisingas
            </div>
            <div class="form-group">
                <label for="answer1">Atsakymas 5</label>
                <input type="text" class="form-control" name="answer5" placeholder="5 atsakymas">
                <input type="radio" class="pl-2" value="answer5" name="correct_answer" /> Teisingas
            </div>
            <button type="submit" id="submitQuestion" class="btn btn-primary">Pridėti klausimą</button>
        </form>
    </div>
    <script>
        $("#submitQuestionForm").trigger("reset");
    </script>
<?php include('./footer.php');?>