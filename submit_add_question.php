<?php
    require_once('./config.php');
    require_once('./global_functions.php');
    session_start();
    print_r($_POST); 
    $question = array();
    $question['question'] = $_POST['question'];
    $question['type'] = $_POST['question_type'];
    $question['verified'] = false;
    send_pg_insert("questions", $question);
    $questionId = gor("SELECT lastval() FROM questions");

    $correct = $_POST['correct_answer'];

    for($i = 1; $i < 6; $i++) {
        if(strlen($_POST['answer' . $i]) > 0) {
            $answer = array();
            $answer['question_id'] = $questionId;
            $answer['answer'] = $_POST['answer' . $i];
            $answer['correct'] = $correct == 'answer' . $i ? 1 : 0;

            send_pg_insert("answers", $answer);
        }
    }

    $_SESSION['question_added'] = true;

    header("Location: quiz.php");
?>