<?php
//---------------------PART SECRETARY--------------------//

require "model/user.php";
require "model/session.php";

function loginAdmin()
{
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
    elseif($user["status"] === "Teacher" || $user["status"] === "Teacher")
    {
      initializeUserSession($user);
      redirectTo("teacher");
    }
    redirectTo("adminConnection");
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
        redirectTo("testStart");
      }
    }
    redirectTo("");
  }
  require "view/indexView.php";
}

function homeTeacher()
{
  require "view/homeTeacherView.php";
}

function homeSecretary()
{
  require 'view/homeSecretaryView.php';
}

// function to logout session /////////////////////////////
function logoutUser()
{
  session_start();
  if (isLogged()) {
    logout();
    redirectTo("");
  }
  else {
    redirectTo("");
  }
  var_dump(session_start());
}
//////////////////////////////////////////////////////////
function addStudent(){
  if(!empty($_POST)){
    //Add User
        addUser($_POST);
        $user_id = getLastUserID();
        $code = uniqCode(10);
        //Add Session
        if(addSession($_POST, $user_id, $code)){
            redirectTo('secretary/results');
        }
        else{
            redirectTo('secretary/addStudent');
        }
      }
  require 'view/createSessionStudentView.php';
}

function results(){
  //Stock the new join table
  $sessions = getJoinUserSession();
  require 'view/admittedListView.php';
}



/////////////////////////////////////////////////////////////

function progress(){
  //Stock user and Session user
  $userSessions = getUserAndSession();


foreach ($userSessions as $key => $session) {


  if( $session["start_qcm_date"] && !$session["end_qcm_date"]){
    $userSessions[$key]["status"] = "En Cours";
  }
  elseif($session["start_qcm_date"] && $session["end_qcm_date"]){
      $userSessions[$key]["status"] = "Terminé";
  }
  else {
      $userSessions[$key]["status"] = "Non-actif";
  }
  echo "<p>" . var_dump($session) . "</p>";
}

function singleSecretary(){
   $user_id = $_GET['id'];
  // stock information's user by id session
   $user = getUserbySessionID($user_id);

  require 'view/singleSecretaryView.php';
}



  require 'view/sessionListView.php';
  }



/////////////////////////////////////////////////////////////
// need! : modify the error message to redirect
function eraser(){

  if (isset($_GET["id"])) {
    $deleteTabUser = deleteTabUser(intval($_GET["id"]));

    if ($deleteTabUser) {
    deleteTabSession(intval($_GET["id"]));
    }
      redirectTo("secretary/progress");

      exit;
    }
    redirectTo("secretary/progress");
}
////////////////////////////////////////////////////////////



function showSingle(){

    require 'view/singleView.php';
}
?>
