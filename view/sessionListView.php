<?php
session_start();
// require "deleteSessionTreatment.php";

include "view/template/header.php";
?>
<div class="container-fluid">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nom </th>
            <th>Prénom</th>
            <th>Clef </th>
            <th>Status</th>
            <th>Supprimer</th>
          </tr>
          <tbody>
            <!-- foreach to see all sessions -->
            <!-- echo 'deleteUser.php?id=' . $userSession['id_user'] -->
              <?php
              foreach ($userSessions as $key => $userSession){
        ?>
        <tr>
          <th scope="row"> <?php echo $userSession["last_name"] ?> </th>
          <td scope="row"> <?php echo $userSession["first_name"] ;?> </td>
          <td scope="row">  <?php echo $userSession["code"] ?> </td>
          <td scope="row"><?php echo $userSession["created_date"] ;  ?> </td>
          <td scope="row"><a <?php  setHref("deleteuser",["id" => $userSession['id_user']]); ?> class="btn btn-danger btn">Supprimer</a></td>

        </tr>
      </thead>
      <?php
    }

    ?>
    </tbody>
    </table>
</div>
