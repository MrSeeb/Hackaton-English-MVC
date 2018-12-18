<?php
//Charge the header
include "Template/header.php";
?>


<!-- Here apprenant's name will be integer in h1 -->
<h1 class="col-12 bg-primary text-center text-white bg-dark">l'apprenant </h1>

<!--
Here the "?" will be replace by the information  -->

 <div class="container">
   <div class="row ">
     <div class="col-12  text-center border border-dark mt-4">
       <p>Date de création de la session : ? </p>
     </div>
     <div class="col-12  text-center border border-dark mt-4">
       <p>Heure de passage : ?</p>
     </div>
     <div class="col-12  text-center border border-dark mt-4">
       <p>Temps du teste : ?</p>
     </div>
   </div>
 </div>

<!-- Here the "?" will be replace by the information  -->

 <div class="container mt-5">
   <div class="row" style="height: 120px; background-color: rgba(0,0,255,.1)">
     <div class="col-sm border border-dark" >
       <p class="text-center">Pourcentage de bonne réponse : ?</p>
     </div>
     <div class="col-sm border border-dark">
       <p class="text-center">Pourcentage de mauvaise réponse : ?</p>
     </div>
     <div class="col-sm border border-dark">
       <p class="text-center">Niveau : ?</p>
     </div>
   </div>
 </div>


<!-- Here a loop will be integer for the liste of question . -->

 <div class="container mt-5">
   <div class="row">
     <div class="col-sm border border-dark">
        <p class="text-center"> question :</p>
     </div>
     <div class="col-sm border border-dark">
       <p class="text-center"> Vrai/Faux</p>
     </div>
   </div>
 </div>

 <?php
 //Charge the footer
 include "Template/footer.php";
 ?>