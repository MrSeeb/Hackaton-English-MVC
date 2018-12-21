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
  $responses = getResponsesQuestion($_GET["id"]);
  if(!empty($_POST)){
    if(updateQuestion($_POST)){
        updateTrueResponse($_POST, $responses[0]["id_response"] );
        updateBadResponse1($_POST, $responses[1]["id_response"] );
        updateBadResponse2($_POST, $responses[2]["id_response"] );
    }
  }
  require "view/updateQuestionView.php";
}

 ?>
