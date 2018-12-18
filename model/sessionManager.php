<?php


//Function deconnection
function logout() {
  //We retrieve the current session
  session_start();
  //We empty the session of its variables
  session_unset();
  //We destroy the session
  session_destroy();
  //We redirect the user to the index with message
  header("Location: index.php?success=Vous avez été déconnecté, à bientôt :)");
}
 ?>
