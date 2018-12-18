<?php
//fichier de configuration globale, notamment utilisé dans le routeur et pour les redirection
function getGlobalConfig() {
  return $config = [
    "protocol" => "",
    "host" => "localhost/Lab/Hackaton-English-MVC/",
    "status" => ["user", "secretary", "teacher", "admin"],
    "defaultRoute" => ""
  ];
}

 ?>
