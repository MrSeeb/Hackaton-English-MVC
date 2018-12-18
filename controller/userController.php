<?php

//load page
require "model/user.php";
require "model/session.php";
require "view/indexView.php";

function loginStudent()
{
    $reponses = getDataBase()->query('SELECT u.last_name, u.first_name, s.code FROM user u INNER JOIN session s ON u.id_user = s.user_id ');
    $reponse = $reponses->fetchall();
    //Check if the form is completed
    if(!empty($_POST))
    {
        //clear the form enter
        $_POST = clearForm($_POST);
        //Collect the stored users
        foreach ($reponse as $key =>$user)
        {
            if($user["first_name"] === $_POST["first_name"] && $user["last_name"] === $_POST["last_name"] && $user["code"] === $_POST["code"])
            {
                //Start a session to store the user information stored session
                session_start();
                $session = $_SESSION["session"]; 
                //Start a session to store the user information stored answers
                $reponseStudent = $_SESSION["reponse"];
                redirectTo("bravo");
            }
        }
        redirectTo("");
    }
}

function homeTeacher()
{
  require "view/homeTeacherView.php";
}

function deconectUser()
{
  session_start();
  if (isLogged()) {
    logout();
    redirectTo("");
  }
  else {
    redirectTo("");
  }
}

?>
