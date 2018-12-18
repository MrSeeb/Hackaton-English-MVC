<?php
session_start();
require "Model/db.php";
require "Model/sessionStudentManager.php";
require "Model/userManager.php";
$db = connectToDataBAse();
$apprenants = getUsers($db);
$code = getSessions($db);
include "Template/header.php";
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
<?php include "Template/footer.php"; ?>