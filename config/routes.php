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
<<<<<<< HEAD
    "Secretary" => [
      "user",
      "homeSecretary"
    ],
    "Secretary/addStudent" => [
      "user",
      "addStudent"
    ],
    "Secretary/results" => [
      "user",
      "results"
    ],
    "Secretary/progress" => [
      "user",
      "progress"
=======
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
>>>>>>> 26c5c53009e8f676088ed5a7753b070ed9213742
    ]
  ];
}

 ?>
