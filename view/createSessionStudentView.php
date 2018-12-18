<?php

require "../Service/errorManager.php";
session_start();
include "../Template/header.php";
displayMessages();
include "../Template/Forms/formCreateSession.php";
include "../Template/footer.php";
?>
