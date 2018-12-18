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
      "firstpage"
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
