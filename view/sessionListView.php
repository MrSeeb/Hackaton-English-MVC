<?php
session_start();
<<<<<<< HEAD
// require "../Model/db.php";
// require "../Model/sessionStudentManager.php";
// require "../Model/userManager.php";
// require "deleteSessionTreatment.php";
// $db = connectToDataBAse();
// $apprenants = getUsers($db);
// $code = getSessions($db);
include "template/header.php";
=======

require "model/session.php";
require "model/user.php";
// require "deleteSessionTreatment.php";
$db = connectToDataBAse();
$apprenants = getUsers($db);
$code = getSessions($db);
include "view/template/header.php";
>>>>>>> 26c5c53009e8f676088ed5a7753b070ed9213742
?>
<div class="container-fluid row ">
  <div class="col-6 p-0">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nom </th>
            <th>Prénom</th>
          </tr>
          <tbody>
            <!-- foreach to see all sessions -->
              <?php
              foreach ($apprenants as $key => $result)
              {
                if ($result["status"] === "user") {?>

                  <tr>
                    <th scope="row"> <?php echo $result["last_name"] ?> </th>
                    <td scope="row"> <?php echo $result["first_name"] ;?> </td>
                  </tr>
                </thead>
                <?php
              }
            }
                  ?>
                </tbody>
              </table>
          </div>
          <div class="col-6 p-0">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Clef </th>
                    <th>Status</th>
                    <th>Supprimer</th>
                  </tr>
                  <?php
                  foreach ($code as $key => $theKey) {
                    ?>
                    <tr>
                      <td scope="row">  <?php echo $theKey["code"] ?> </td>
                      <td scope="row"><?php echo $theKey["created_date"] ;  ?> </td>
                      <td scope="row"><a href="<?php echo 'Treatment/deleteSessionTreatment.php?id=' . $theKey['id_session']; ?>" class="btn btn-danger btn">Supprimer</a></td>
                    </tr>
                  </thead>
                  <?php
                }
                ?>
                <tbody>
              </div>
</div>
