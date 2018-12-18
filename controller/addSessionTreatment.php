<?php
require "../Model/db.php";
require "../Model/userManager.php";
require "../Model/sessionStudentManager.php";
require "../Service/formChecker.php";
?>

<?php
if(!empty($_POST))
{
  // if $_POST is not empty , we secure the entries
  clearForm($_POST);
  // we add user to the db
  if(addUser($_POST))
  {
    $user_id = getLastUserID();
    $code = uniqCode(10);
    // and we add session to the db
    if(addSession($_POST, $user_id, $code))
    {
      // if addsession is true : we header locate to sessionList.php with success message
      header("Location: ../Admin/sessionList.php?success=La session a bien été ajoutée");
      exit;
    }
    else
    {
      // if addsession is false : we header locate to formCreateSession.php
      header("Location: ../Admin/createSessionStudent.php?errors= ici le code erreur");
      exit;
    }
  }
  else
  {
    // if adduser is false : we header locate to formCreateSession.php
    header("Location: ../Admin/createSessionStudent.php?errors= ici le code erreur");
    exit;
  }
}
else
{
  // if $_POST is empty : we header locate with error message to formCreateSession.php
  header("Location: ../Admin/createSessionStudent.php?errors= ici le code erreur");
  exit;
}
?>
