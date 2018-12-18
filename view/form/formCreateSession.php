<!-- need: form action?-->
<!--if error, check path  -->


<form class="w-50 mx-auto my-5" action="../Treatment/addSessionTreatment.php" method="post">
  <div class="form-group">
    <label for="first_name">Le prenom de l'apprenant</label>
    <input type="text" class="form-control"  name="first_name" id="first_name">
  </div>
  <div class="form-group">
    <label for="last_name">Le nom de l'apprenant</label>
    <input type="text" class="form-control"  name="last_name" id="last_name">
  </div>
  <div class="form-group">
    <label for="mail">L'adresse mail de l'apprenant</label>
    <input type="text" class="form-control" name="mail" id="mail">
  </div>
  <div class="form-group">
    <label for="phone">N° de téléphone de l'apprenant</label>
    <input type="number" class="form-control" name="phone" id="phone">
  </div>
  <button type="submit" class="btn lightBg">Creer une session</button>
 </form>
