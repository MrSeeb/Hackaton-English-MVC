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
<<<<<<< HEAD
    "teacher/admintedList" => [
=======
    "teacher/admittedList" => [
>>>>>>> 218733244181f56a1d881aba20538c0e13a62bf8
      "session",
      "admittedList"
    ],
    "teacher/questionList" => [
      "question",
      "questionList"
    ],
<<<<<<< HEAD
    "teacher/addquestion" => [
=======
    "teacher/addQuestion" => [
>>>>>>> 218733244181f56a1d881aba20538c0e13a62bf8
      "question",
      "addQuestion"
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
    "secretary/results" => [
      "user",
      "results"
    ],
    "secretary/progress" => [
      "user",
      "progress"
    ],
    //=============PART TEST STUDENT=============//
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
    "testEnd" => [
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
