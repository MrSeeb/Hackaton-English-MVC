<?php

//load page
require "model/user.php";
require "model/session.php";


function loginAdmin(){
//On charge le fichier avec les fonctions qui renvoient nos données
// require "Model/db.php";
// $reponses = connectToDataBAse()->query('SELECT * FROM user');
// $reponse = $reponses->fetchall();

// if(!empty($_POST)) {
//     $user = getUserByPseudo($_POST);
//     if(!empty($user) && password_verify($_POST["password"], $user["password"])) {
//       initializeUserSession($user);
//       redirectTo("message");
//     }
//   }
//   require "view/loginView.php";



//On vérifie si le formulaire a été rempli

if(!empty($_POST)) {
  // We looking for the user in the db
  $secretary = isSecretary();
  $teacher = getTeacher();
  //On nettoie les entrées du formulaire
 foreach ($_POST as $key => $value) {
   $_POST[$key] = htmlspecialchars($value);
 }

  if ($secretary["last_name"] === $_POST["last_name"] && $secretary["first_name"] === $_POST["first_name"] && $secretary["password"] === $_POST["user_password"] ) {
   redirectTo();
  }

 //On récupère les utilisateurs stockés
   // if($user["first_name"] === $_POST["first_name"] && $user["last_name"] === $_POST["last_name"] && $_POST["user_password"] === $user["password"]) {
   //   //On démarre une session pour y stocker les informations de l'utilisateur
   //   $_SESSION["user"] = $user;
   //   if ($_SESSION["user"]["status"] === "Secretary") {
   //     // header("Location: admin/homeSecretary.php");
   //     // exit;
   //   }
   //   if ($_SESSION["user"]["status"] === "Teacher"){
   //     // header("Location: admin/homeTeacher.php");
   //     // exit;
   //   }
   // }

 // header("Location: indexAdmin.php?message=Nous n'avons aucun utilisateur avec ce nom ou ce mot de passe");
 // exit;
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
    require "view/indexView.php";
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
