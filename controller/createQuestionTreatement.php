<!-- Connexion database -->
<?php
require "../Model/db.php";
require "../Model/questionManager.php";
$db = connectToDataBAse();
?>

<?php

//We check if $_POST['question'] and $_POST['reponse'] exist
if(isset($_POST['question']) && isset($_POST['reponse']))
{
  //Use the fonction stocked in $add_question for add a question in data base
  $add_question = addQuestion($db);

  //We stock the last id of last question
  $lastquestion = getLastQuestionID($db);

  //We stock ID_question and Reponse in the table Reponse
  $add_reponse = addReponse($lastquestion, $db);

  // On redirige vers questionList avec un message de succés
  header('Location: ../questionList.php?message=Votre Question/Reponse ont bien était ajouté');
  exit;
}
 ?>
