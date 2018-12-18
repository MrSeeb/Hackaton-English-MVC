<?php
//load page
require "Model/db.php";
require "Model/userManager.php";
require "Service/formChecker.php";

$reponses = connectToDataBAse()->query('SELECT u.last_name, u.first_name, s.code FROM user u INNER JOIN session s ON u.id_user = s.user_id ');
$reponse = $reponses->fetchall();
//Check if the form is completed
if(!empty($_POST)) {
  //clear the form enter
  $_POST = clearForm($_POST);
 //Collect the stored users
 foreach ($reponse as $key =>$user) {
   if($user["first_name"] === $_POST["first_name"] && $user["last_name"] === $_POST["last_name"] && $_POST["code"] === $user["code"]) {
     //Start a session to store the user information stored session
     session_start();
     $_SESSION["session"] = $session;
     //Start a session to store the user information stored answer
     session_start();
     $_SESSION["reponse"] = $reponseStudent;
     header("Location: testStart.php");
     exit;
   }
 }
 header("Location: index.php?message=Nous n'avons aucun utilisateur avec ce nom et prenom");
 exit;
}
//if the form isn't completed, we returns the user on the connexion page with a error message
 header("Location: index.php?message=Vous devez remplir les champs du formulaire");

 ?>
