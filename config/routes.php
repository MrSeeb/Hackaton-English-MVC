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
    "teacher" => [
      "user",
      "homeTeacher"
    ],
    "teacher/admittedList" => [
      "session",
      "admittedList"
    ],
    "Teacher/questionList" => [
      "question",
      "questionList"
    ],
    "teacher/addQuestion" => [
      "question",
      "addQuestion"
    ],
    "teacher/updateQuestion" => [
      "question",
      "updateOneQuestion",
      ["id" => ["integer"]],

    ],
    //=============PART SECRETARY=============//
    "secretary" => [
      "user",
      "homeSecretary"
    ],
    "secretary/addStudent" => [
      "user",
      "addStudent"
    ],

    "secretary/sessionList" => [
      "session",
      "sessionList"
    ],
    "secretary/results" => [
      "user",
      "results"
    ],
    "secretary/progress" => [
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
    "testEnd" => [
      "session",
      "testEnd"
    ],
    "deconect" => [
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
