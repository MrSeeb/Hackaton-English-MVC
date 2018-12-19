<?php include "view/template/header.php"; ?>

<p class="text-right"><a type="button" href="../logout.php" class="btn btn-success text-white ">Déconnecter</a></p>
<a <?php setHref("Secretary/addStudent"); ?> class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Inscription</a>
<a <?php setHref("Secretary/results"); ?> class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Résultat</a>
<a <?php setHref("Secretary/progress"); ?> class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Table de progression</a>

<?php include "view/template/footer.php"; ?>
