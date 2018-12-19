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

    //=============PART TEACHER============//

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

    //=============PART SECRETARY=============//
    "secretary" => [
      "user",
      "homeSecretary"
    ],
    "Secretary/addStudent" => [
      "user",
      "addStudent"
    ],

    "Secretary/sessionList" => [
      "session",
      "sessionList"
    ],
    "Secretary/results" => [
      "user",
      "results"
    ],
    "Secretary/progress" => [
      "user",
      "progress"

    ],
// ====================PART SESSION ==================

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
    "logoutUser" => [
      "user",
      "logoutUser"
      // ["id" => ["integer"]]
    ],

    "deleteUser" => [
      "user",
      "eraser",
        ["id" => ["integer"]],
    ]
  ];
}

 ?>
