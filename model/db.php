<?php
function connectToDataBAse() {
  try {
<<<<<<< HEAD
    $db = new PDO('mysql:host=localhost;dbname=Adep_Anglais;charset=utf8', 'phpmyadmin', 'abcdef1996');
=======
    $db = new PDO('mysql:host=localhost;dbname=Adep_Anglais;charset=utf8', 'mbela', 'rootroot');
>>>>>>> 26c5c53009e8f676088ed5a7753b070ed9213742
  }
  catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
  }
  return $db;
}

 ?>
