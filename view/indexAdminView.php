<?php
//On charge le header
include "view/template/header.php";
require "../Service/errorManager.php";
//On charge le formulaire de connexion
displayMessages();
include "view/emplate/Forms/formConnectionAdmin.php";
//On charge le footer
include "view/Template/footer.php";
?>
