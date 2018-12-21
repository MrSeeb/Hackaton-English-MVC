<?php
session_start();

include "template/header.php";
?>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Nom / Prénom</th>
            <th scope="col">% de réussite</th>
            <th scope="col">Niveau</th>
            <th scope="col">Plus d'infos</th>
        </tr>
    </thead>
    <tbody>
      <?php foreach ($sessions as $key => $value){ ?>
        <tr>
          <td><?php echo $value['first_name']; echo " " .$value['last_name']; ?></td>
          <td><?php echo $value['result']; ?></td>
          <td><?php echo $value['level'];?></td>
          <td><a class="btn btn-primary" <?php setHref('secretary/single', ['id' => $value['id_session']]);?> role="button">More Infos</a></td>
        </tr>
      <?php } ?>
    </tbody>
</table>
<?php include "template/footer.php"; ?>
