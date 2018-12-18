<?php

function homeTeacher(){

require "view/homeTeacherView.php";

}

function deconectUser(){

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
