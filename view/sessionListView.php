<?php
session_start();
require "../Model/db.php";
require "../Model/sessionStudentManager.php";
require "../Model/userManager.php";
// require "deleteSessionTreatment.php";
$db = connectToDataBAse();
$apprenants = getUsers($db);
$code = getSessions($db);
include "../Template/header.php";
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
