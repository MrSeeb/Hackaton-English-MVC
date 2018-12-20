<?php
require "model/question.php";
include "view/template/header.php";

$questions = getQuestions();
 ?>

<section>
  <h2>Panel d'adminisatration</h2>
  <div class="d-flex justify-content-end">
    <!-- Add entity in table -->
    <a <?php setHref('teacher/addQuestion'); ?> class="btn btn-primary btn-lg active" role="button">Ajouter +</a>
  </div>
  <div class="mx-auto mt-3">
    <!-- Presentation of questions + responses -->
    <?php foreach ($questions as $key => $question){?>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Question 1 : <?php echo $question["question"]; ?></th>
            <th scope="col"><a <?php setHref("teacher/updateQuestion", ["id" => $question['id_question']]) ?>> modifier</a> </th>
          </tr>
        </thead>
        <tbody>
          <?php
          $responses = getResponsesQuestion($question["id_question"]);
          foreach ($responses as $key => $response){?>
          <tr>
            <th scope="col">@</th>
            <td scope="col"><?php echo $response["response"];?></td>
            <td scope="col"><?php echo  ($response["is_correct"])? "Vrai" : "Faux"; ?> </td>
          </tr>
            <?php } ?>
        </tbody>
    </table>
  <?php } ?>
  </div>
</section>
 <?php
include "view/template/footer.php";
 ?>
