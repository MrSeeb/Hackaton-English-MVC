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
    "adminconnection" => [
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
    "teacher/admintedlist" => [
      "session",
      "admittedList"
    ],
    "teacher/questionlist" => [
      "question",
      "questionList"
    ],
    "teacher/addquestion" => [
      "question",
      "addQuestion"
    ],
    //=============PART SECRETARY=============//
    "secretary" => [
      "user",
      "homeSecretary"
    ],
    "secretary/addstudent" => [
      "user",
      "addStudent"
    ],
    "secretary/results" => [
      "user",
      "results"
    ],
    "secretary/progress" => [
      "user",
      "progress"
    ],
    "teststart"=> [
    "session",
    "testStart" ,
    // ["id" => ["integer"]],
    ],
    "test" => [
      "session",
      "test",
      // ["id" => ["integer"]],
    ],
    "testend" => [
      "session",
      "testEnd"
    ],
    "deconect" => [
      "user",
      "logoutUser"
      // ["id" => ["integer"]]
    ],

    "deleteuser" => [
      "user",
      "eraser",
        ["id" => ["integer"]],
    ]
  ];
}
?>
