<?php
//Charge the header
include "Template/header.php";
 ?>
 <!-- Here the "?" will be replace by the information  -->
<p class="text-center"> Question ? </p>

<!--
Here the "reponse #" will be replace by the information  -->
<div class="row">
  <div class="form-check  text-center col-4">
    <label class="form-check-label" for="defaultCheck1">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
      reponse 1
    </label>
  </div>
  <div class="form-check  text-center col-4">
    <label class="form-check-label" for="defaultCheck2">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
      reponse 2
    </label>
  </div>
  <div class="form-check  text-center col-4">
    <label class="form-check-label" for="defaultCheck2">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
      reponse 3
    </label>
  </div>
</div>

<div class="row">
  <button type="button" class="btn btn-success col-12 mt-4">Valider</button>
  <p class="text-danger text-center col-12 mt-4">Attention :  en cliquant sur le boutton terminé le teste ne seras plus disponible. </p>
  <button type="button" class="btn btn-outline-danger col-12">Terminer le test !</button>
</div>

 <?php
 //Charge the footer
 include "Template/footer.php";
  ?>
