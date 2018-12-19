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
    // même route que teacher/admittedList faire une route commune? comment mettre 2 status différent
    "secretary/admittedList"=>[
      "session",
      "admittedList",
      "status" => "Secretary"
    ],
    "Secretary/sessionList" => [
      "session",
      "sessionList"
    ],
    "testStart"=> [
    "session",
    "testStart" ,
    // ["id" => ["integer"]],
    ],
    "test" => [
      "session",
      "test",
      // ["id" => ["integer"]],
    ],
    "deconect" => [
      "user",
      "deconectUser"
    ]

  ];
}

 ?>
