<?php
//On charge le header
include "../Template/header.php";
require "../Service/errorManager.php";
//On charge le formulaire de connexion
displayMessages();
include "../Template/Forms/formConnectionAdmin.php";
//On charge le footer
include "../Template/footer.php";
?>
