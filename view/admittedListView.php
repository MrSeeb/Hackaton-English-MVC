<?php
session_start();
require "model/sessionManager.php";
require "model/users.php";
$apprenants = getUsers();
$code = getSessions();

var_dump($apprenants);
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
    <?php
    foreach ($apprenants as $key => $result)
    {
        if ($result["status"] === "user")
        {
        ?>
        <tr>
            <th scope="row"> <?php echo $result["first_name"]; ?> <?php echo $result["last_name"]; ?> </th>
            <?php
        }
    }
    foreach ($code as $key => $theKey)
    {
        ?>
            <td scope="row">  <?php echo $theKey["result"]; ?> </td>
            <td scope="row"><?php echo $theKey["level"] ;  ?> </td>
        </tr>
    <?php
    }
    ?>
    </tbody>
</table>
<?php include "template/footer.php"; ?>