<?php include "view/template/header.php"; ?>

<p class="text-right"><a type="button" <?php setHref("deconect"); ?> class="btn btn-success text-white ">Déconnecter</a></p>
<a <?php setHref("secretary/addstudent"); ?> class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Inscription</a>
<a <?php setHref("secretary/results"); ?> class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Résultat</a>
<a <?php setHref("secretary/progress"); ?> class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Table de progression</a>

<?php include "view/template/footer.php"; ?>
