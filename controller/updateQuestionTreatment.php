<?php
//load page
require "Model/db.php";
require "Model/questionManager.php";

$question = connectToDataBAse()->execute('UPDATE "question" SET "question"= ? WHERE id_question = ?');

 ?>
