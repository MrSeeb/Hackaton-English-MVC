<?php
require "model/question.php";

function questionList(){
  $questions = getQuestions();
  require "view/questionListView.php";
}

function addQuestion(){
  require "view/addQuestionView.php";
}

function updateOneQuestion(){
  $question = getQuestion($_GET["id"]);
  $responsesFalse = getResponsesQuestionFalse($_GET["id"]);
  $responseTrue = getResponsesQuestionTrue($_GET["id"]);
  if(!empty($_POST)){

    if(updateQuestion($_POST)){
        updateResponse($_POST);
        // redirectTo("Teacher/questionList");
    }

  }
   var_dump($_POST);
  // var_dump($question);
  require "view/updateQuestionView.php";
}

 ?>
