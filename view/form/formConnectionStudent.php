<section class="container">
    <h2>Bienvenue!</h2>
    <h3>Veuillez rentrer vos identifiants pour acceder à votre test.</h3>
    <div class="container-fluide">
      <div class="row">
        <form class="mx-auto my-auto" action="loginStudent.php" method="post">
          <div class="form-group">
            <label for="last-name">Nom</label>
            <input type="text" class="form-control" id="last-name" name="last_name"  value="">
          </div>
          <div class="form-group">
            <label for="first-name">Prenom</label>
            <input type="text" class="form-control" id="first-name" name="first_name" value="">
          </div>
          <div class="form-group">
            <label for="code">Code secret</label>
            <input type="text" class="form-control" id="code" name="code" value="" >
            <small id="code" class="form-text text-muted">Votre clé est le code fourni par la secrétaire lors de votre inscription à la session de test</small>
          </div>
          <button type="submit" class="btn btn-success">Accéder au test</button>
        </form>
      </div>
    </div>
</section>
