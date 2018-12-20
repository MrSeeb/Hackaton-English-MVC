<?php
require "model/session.php";

function admittedList(){
require "view/admittedListView.php";
}

function sessionList(){
require "view/sessionListView.php";
}

function testStart(){
  // var_dump($_SESSION); la session a t elle été initialisée au niveau du login?
  require "view/testStudentStartView.php";
}

function test(){
  // var_dump($_SESSION); la session a t elle été initialisée au niveau du login?
  require "view/testStudentView.php";
}

function testEnd(){
  // var_dump($_SESSION); la session a t elle été initialisée au niveau du login?
  require "view/testStudentEndView.php";
}




 ?>
