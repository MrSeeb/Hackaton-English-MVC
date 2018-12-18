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
      "exemple",
      "welcome"
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
    ]
  ];
}

 ?>
