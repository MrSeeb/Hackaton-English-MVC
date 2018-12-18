<?php
require "../Model/db.php";
require "../Model/userManager.php";
// require "Model/sessionManager.php";
$db = connectToDataBAse();

$id = intval(htmlspecialchars($_GET["id"]));

if(isset($id)) {
  //we get the id's user to delete


  //we call the deleteUser
  if(deleteUser($id, $db)) {
    // header("Location: sessionList.php?success=Votre session a bien été supprimé");
    //exit;
  }
  else {
    // header("Location: sessionList.php");
    //exit;
  }var_dump($id);
}



 ?>
