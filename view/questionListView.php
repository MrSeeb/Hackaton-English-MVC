<?php
require "Model/db.php";
include "Template/header.php";
$db = connectToDataBAse();

$query_question = $db->query('SELECT * FROM question');

$question = $query_question->fetchall(PDO::FETCH_ASSOC);

$query_reponse = $db->query('SELECT * FROM reponse');

$reponse = $query_reponse->fetchall(PDO::FETCH_ASSOC);

 ?>

<section>
  <h2>Panel d'adminisatration</h2>
  <div class="d-flex justify-content-end">
    <!-- Add entity in table -->
    <a href="addQuestion.php" class="btn btn-primary btn-lg active" role="button">Ajouter +</a>
  </div>
  <div class="mx-auto mt-3">
    <!-- Presentation of questions + reponses -->
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Question</th>
          <th scope="col">Réponse</th>
          <th scope="col">Options</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <?php foreach ($question as $key => $value)
            {
              echo $value['question']. "<br>" ;
            }
            ?>
          </td>

          <td>
            <?php foreach ($reponse as $key => $value)
            {
              echo $value['reponse']. "<br>";
            }
            ?>
          </td>
          <td>
            <?php foreach ($reponse as $key => $value) {
              if(!empty($reponse)) {
                echo "<button type='submit' class='btn btn-warning'>Modifier</button>
                <button type='button' class='btn btn-danger'>Supprimer</button>". "<br>";
              }
              else {
                echo "nop";
              }
            }

            ?>
          </td>
          </tr>
    </table>
  </div>
</section>
 <?php
include "Template/footer.php";
 ?>
