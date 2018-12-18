<?php include "view/template/header.php"; ?>

<p class="text-right"><a type="button" <?php setHref('deconect') ?> class="btn btn-success text-white ">Déconnecter</a></p>
<section class="text-center d-flex justify-content-around m-5">
  <span class="circle"><a <?php setHref('Teacher/questionList') ?> type="button" class="btn btn-secondary">QCM</a></span>
  <span class="circle"><a <?php setHref('Teacher/AdmintedList') ?> type="button" class="btn btn-secondary">Apprenant</a></span>
</section>

<?php include "view/template/footer.php"; ?>
