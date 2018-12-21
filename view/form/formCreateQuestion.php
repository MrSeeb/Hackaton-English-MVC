
<div class="container col-6">
<!-- form action a remplir quand toutes les pages seront crées-->
    <h2>Ajouter ma question</h2>
    <form method="post">
        <!-- Input ou la prof inscrit la question qu'elle va poser lors du quizz -->
        <input type="hidden" name="id_question" >
        <div class="form-group">
            <label for="question">Question:</label>
            <input type="text" class="form-control" id="question" name="question" placeholder="Question" >
        </div>

        <!-- Input ou la prof inscrit la bonne réponse -->
        <div class="form-group">
            <label for="good_answer">Bonne réponse:</label>
            <input type="text" class="form-control" id="good_response" name="goodResponse" placeholder="Bonne réponse" >

        </div>

        <!-- Input ou la prof inscrit les mauvaises réponses -->
        <div class="form-group">
            <label for="bad_answer">Mauvaises réponses:</label>
            <input type="text" class="form-control mb-3" id="bad_response1" name="badResponse1" placeholder="Mauvaise réponse 1" >
            <input type="text" class="form-control" id="bad_response2" name="badResponse2" placeholder="Mauvaise réponse 2" >
        </div>
        <!-- Bouton pour ajouter la question -->
        <button type="submit" class="btn btn-success">Ajouter la question</button>
    </form>
</div>
