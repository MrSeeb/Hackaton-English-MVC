<?php
//Charge the header
include "template/header.php";
?>

<!-- Here apprenant's name will be integer in h1 -->
<h1 class="col-12 bg-primary text-center text-white bg-dark"><?php echo $user['first_name']; echo ' '; echo $user['last_name']; ?></h1>

<!--
Here the "?" will be replace by the information  -->

 <div class="container">
   <div class="row ">
     <div class="col-12  text-center border border-dark mt-4">
       <p>Date de création de la session : <?php echo $user['created_date']; ?></p>
     </div>
     <div class="col-12  text-center border border-dark mt-4">
       <p>Début du test à : <?php echo $user['start_qcm_date']; ?></p>
     </div>
     <div class="col-12  text-center border border-dark mt-4">
       <p>Temps du teste : ?</p>
     </div>
   </div>
 </div>

 <?php
 //Charge the header
 include "template/footer.php";
 ?>
