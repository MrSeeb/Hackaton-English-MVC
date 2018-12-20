<?php
require "model/question.php";

function questionList(){
  require "view/questionListView.php";
}

function addQuestion(){
  require "view/addQuestionView.php";
}

function updateOneQuestion(){
  // code ...
  $question = getQuestion($_GET["id"]);
  $responses = getResponsesQuestion($_GET["id"]);
  $responsesFalse = getResponsesQuestionFalse($_GET["id"]);
  $responseTrue = getResponsesQuestionTrue($_GET["id"]);
  if(!empty($_POST)){
    if(updateQuestion($_POST)){

    }

  }
  var_dump($_POST);
  require "view/updateQuestionView.php";
}

 ?>
