<?php
require "../Model/userManager.php";
require "../Model/sessionStudentManager.php";
require "../Service/formChecker.php";
require "../Model/db.php";
?>

<?php
if(!empty($_POST)) {
   // if $_POST is not empty , we check the entries
   $_POST = clearForm($_POST);
   $errors = "";
   if(empty($_POST["first_name"]) || empty($_POST["last_name"])){
     $errors .= "8" ;
   }
   if(empty($_POST["phone"]) && empty($_POST["mail"])){
     $errors .= "6" ;
   }
   if(empty($_POST["mail"])){
     $errors .= respectPattern("#[0-9]{10}#", $_POST["phone"]);
   }

   if(!empty($errors)){
     // have we initialize anonymous session?and Why?
         header("Location: ../admin/createSessionStudent.php?message=$errors");
         exit;
    }else{
      // we add user to the db
      if(addUser($_POST)){
        $user_id = getLastUserID();
        $code = uniqCode(10);
        // and we add session to the db
        if(addSession($_POST, $user_id, $code)){
        // if addsession is true : we header locate to sessionList.php with success message
            header("Location: ../sessionList.php?success=Une session pour le test a bien été crée");
            exit;
        }else{
          // if addsession is false : we header locate to createSessionStudent.php
            header("Location: ../admin/createSessionStudent.php?message=4");
            exit;
        }
      }else{
        // if $_POST is empty : we header locate with error message to createSessionStudent.php
          header("Location: ../admin/createSessionStudent.php?message=2");
          exit;
      }

    }
}else{
    header("Location: Template/Forms/formCreateSession.php?message=0");
    exit;
}
 ?>
