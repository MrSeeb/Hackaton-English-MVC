<?php
//fichier de configuration globale, notamment utilisé dans le routeur et pour les redirection
function getGlobalConfig() {
  return $config = [
    "protocol" => "",
<<<<<<< HEAD
    "host" => "localhost/Lab/Hackaton-English-MVC/",
    "status" => ["user", "secretary", "teacher", "admin"],
=======
    "host" => "localhost:8888/Lab/Hackaton-English-MVC/",
    "status" => ["Secretary", "user", "Teacher"],
>>>>>>> 26c5c53009e8f676088ed5a7753b070ed9213742
    "defaultRoute" => ""
  ];
}

 ?>
