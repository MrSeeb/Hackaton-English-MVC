<!--the input let appear in place older placeholder to the question to change   -->
<div class="container col-6">
<!-- form action a remplir quand toutes les pages seront crées-->
    <h2>Modifier ma question</h2>
    <form action="">
        <!-- Input ou la prof inscrit la question qu'elle va poser lors du quizz -->
        <div class="form-group">
            <label for="question">Question:</label>
            <input type="text" class="form-control" id="question" placeholder="Question" <?php echo "value='" . $question["question"] . "'"; ?>>
        </div>

        <!-- Input ou la prof inscrit la bonne réponse -->
        <div class="form-group">
            <label for="good_answer">Bonne réponse:</label>
            <input type="text" class="form-control" id="good_answer" name="good_response" placeholder="Bonne réponse" <?php echo "value='" . $responseTrue["0"]["response"] . "'"; ?>>
        </div>

        <!-- Input ou la prof inscrit les mauvaises réponses -->
        <div class="form-group">
            <label for="bad_answer">Mauvaises réponses:</label>
            <input type="text" class="form-control mb-3" id="bad_response1" name="bad_response1" placeholder="Mauvaise réponse 1" <?php echo "value='" . $responsesFalse["0"]["response"] . "'"; ?>>
            <input type="text" class="form-control" id="bad_response2" name="bad_response2" placeholder="Mauvaise réponse 2" <?php echo "value='" . $responsesFalse["1"]["response"] . "'"; ?>>
        </div>
        <!-- Bouton pour ajouter la question -->
        <button type="button" class="btn btn-success">Modifier la question</button>
    </form>
</div>
