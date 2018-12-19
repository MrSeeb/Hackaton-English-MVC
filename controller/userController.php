<?php
//---------------------PART SECRETARY--------------------//

require "model/user.php";
require "model/session.php";

function loginAdmin(){
  if(!empty($_POST))
  {
      // We looking for the user in the db
      $user = getAdmin($_POST);
      //On nettoie les entrées du formulaire
      $_POST = clearForm($_POST);
      if ($user["status"] === "Secretary" || $user["status"] === "Secretary")
      {
        initializeUserSession($user);
        redirectTo("secretary");
      }
  }
  require "view/loginAdminView.php";
}

function loginStudent()
{
    $reponses = connectToDataBAse()->query('SELECT u.last_name, u.first_name, s.code FROM user u INNER JOIN session s ON u.id_user = s.user_id ');
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

function homeSecretary(){
  require 'view/homeSecretaryView.php';
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

function addStudent(){
  if(!empty($_POST)){
        addUser($_POST);
        $user_id = getLastUserID();
        $code = uniqCode(10);

        // and we add session to the db
        if(addSession($_POST, $user_id, $code)){
        // if addsession is true : we header locate to sessionList.php with success message
            redirectTo('Secretary/results');
        }
        else{
          // if addsession is false : we header locate to createSessionStudent.php
            redirectTo('Secretary/addStudent');
        }
      }
  require 'view/createSessionStudentView.php';
}

function results(){
  require 'view/admittedListView.php';
}

function progress(){
  require 'view/sessionListView.php';
}

?>
