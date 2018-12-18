<?php require "model/user.php" ?>

<?php


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

  if ($secretary["last_name"] === $_POST["last_name"] && $secretary["first_name"] === $_POST["first_name"] && $secretary["user_password"] === $_POST["user_password"] ) {
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
?>
