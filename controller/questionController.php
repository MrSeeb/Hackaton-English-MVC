<?php

function questionList(){
  $questions = getQuestions();
  require "view/questionListView.php";
}

// function addQuestion(){
//
//   require "view/addQuestionView.php";
// }

 function addOneQuestion(){
   if(!empty($_POST)){
     if(addQuestion($_POST)){
        $lastIdQuestion = getLastQuestionID();
        addTrueResponse($_POST, $lastIdQuestion);
        addBadResponse($_POST["badResponse1"], $lastIdQuestion);
        addBadResponse($_POST["badResponse2"], $lastIdQuestion);
        redirectTo("teacher/questionList");
     }
   }
   require "view/addQuestionView.php";
 }

function updateOneQuestion(){
  $question = getQuestion($_GET["id"]);
  $responses = getResponsesQuestion($_GET["id"]);
  if(!empty($_POST)){
    if(updateQuestion($_POST)){
        updateResponse($_POST["goodResponse"], $responses[0]["id_response"]);
        updateResponse($_POST["badResponse1"], $responses[1]["id_response"]);
        updateResponse($_POST["badResponse2"], $responses[2]["id_response"]);
        redirectTo("teacher/questionList");
    }
  }
  require "view/updateQuestionView.php";
}


function deleteOneQuestion()
{
  if(isset($_GET["id"]))
  {
    $_GET["id"] = intval($_GET["id"]);
    $deleteQuestion = deleteQuestion($_GET["id"]);
    if($deleteQuestion)
    {
      deleteResponse($_GET["id"]);
      redirectTo("teacher/questionList");
      exit;
    }
  }
}
?>