<?php
    require_once('../config.php');
    require_once('../global_functions.php');
    if (isset($_GET['getHTML'])) {
        index();
    } else {
        validateAnswers();
    }

    function index() {
        $data = mfa_kaip_array("SELECT * FROM questions q INNER JOIN answers a ON (q.question_id = a.question_id) ORDER BY q.question_id");
        $json = array();
        $questions = array();
        $i = 1;
        $prevId = 0;
        $question = array();
        foreach($data as $row) {
            if($prevId != $row['question_id']) {
                if($prevId != 0) {
                    $questions[] = $question;
                }
                $prevId = $row['question_id'];
                $question['id'] = $i++;
                $question['question_id'] = $row['question_id'];
                $question['question'] = $row['question'];
                $question['type'] = $row['type'];
                $question['answers'] = array();
            }
            $answer['id'] = $row['answer_id'];
            $answer['answer'] = $row['answer'];
            $question['answers'][] = $answer;
        }
        $questions[] = $question;
        $json['questions'] = $questions;
        echo json_encode($json);
    }

    function validateAnswers() {
        $json = array();
        $json['post_data'] = $_POST;
        $progress = 0;
        $total = count($_POST);
        foreach($_POST as $q => $a) {
            $correctAnswer = getCorrectAnswer($q);
            $question['question_id'] = $q;
            $question['checked'] = $a;
            $question['correct'] = $correctAnswer;
            $json['questions'][] = $question;
            if($a == $correctAnswer) {
                $progress++;
            }
        }
        $json['progress'] = 100*$progress/$total;
        echo json_encode($json);
    }
    function getCorrectAnswer($question_id) {
        return gor("SELECT answer_id FROM answers WHERE question_id = '" . $question_id . "' AND correct = 't'");
    }

    function indexRandom() {
        $json = array();
        $questions = array();
        for($i = 1; $i < 6; $i++) {
            $question['id'] = $i;
            $question['question'] = "Klausimas " . $i;
            $question['answers'] = array();
            for($j = 0; $j < rand(2, 4); $j++) {
                $answer['id'] = $i . $j;
                $answer['answer'] = "Variantas " . $j;
                $question['answers'][] = $answer;
            }
            $question['type'] = rand(0, 1);
            $questions[] = $question;
        }
        $json['questions'] = $questions;
        echo json_encode($json);
    }

    function generateRandomData() {
        $questions = array();
        for($i = 1; $i < 6; $i++) {
            $question['question'] = "Klausimas " . $i;
            $question['type'] = rand(0, 1);
            send_pg_insert("questions", $question);
            $questionId = gor("SELECT lastval() FROM questions");
            $foundCorrect = false;
            for($j = 0; $j < rand(2, 5); $j++) {
                $answer['question_id'] = $questionId;
                $answer['answer'] = "Variantas " . $j;
                if(!$foundCorrect && ($randValue = rand(0,1))) {
                    $foundCorrect = true;
                } else {
                    $randValue = 0;
                }
                $answer['correct'] = $randValue;
                send_pg_insert("answers", $answer);
            }
            if(!$foundCorrect) {
                $answer['question_id'] = $questionId;
                $answer['answer'] = "Variantas " . ++$j;
                $answer['correct'] = 1;
                send_pg_insert("answers", $answer);
            }
            $questions[] = $question;
        }
    }
?>