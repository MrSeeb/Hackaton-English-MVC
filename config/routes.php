<?php

//Function qui retourne un tableau contenant les routes de notre application

//Modèle des routes
//"NomDeLaRoute" => [
//  "Controller",
//  "Fonction",
//  Optionnel [
//    "parametre1" => ["typeAttendu", optionnel[valeurAttendu]],
//    "parametre2" => ["typeAttendu", optionnel[valeurAttendu]]
//  ]
// "status" => "role"
//]
function getRoutes() {
  return [

    "" => [
      "user",
      "loginStudent"
    ],
    "adminConnection" => [
      "user",
      "loginAdmin"
    ],
    "login" => [
      "admin",
      "loginUser"
    ],
    "Teacher" => [
      "user",
      "homeTeacher"
    ],
    "Teacher/AdmintedList" => [
      "session",
      "AdmintedList"
    ],
    "Teacher/questionList" => [
      "question",
      "questionList"
    ],
    "secretary" =>[
      "user",
      "homeSecretary",
      "status" => "Secretary"
    ],
    "deconect" => [
      "user",
      "deconectUser"
    ],
    "Secretary/sessionList" => [
      "session",
      "sessionList"
    ]
  ];
}

 ?>
