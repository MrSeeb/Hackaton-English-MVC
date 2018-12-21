<?php
// function to have the one user  ok
function getUser($lastName)
{
  $db = connectToDataBAse();
  $query = $db->prepare("SELECT * FROM user WHERE last_name =  ?");
  $query->execute([$lastName]);
  $user = $query->fetch(PDO::FETCH_ASSOC);
  $query->closeCursor();
  return $user;
}
function getAdmin($post)
{
  $db = connectToDataBAse();
  $query = $db->prepare("SELECT * FROM user WHERE last_name = :last_name AND first_name = :first_name AND password = :password");
  $query->execute([
    "last_name" => $post["last_name"],
    "first_name" => $post["first_name"],
    "password" => $post["user_password"]]);
  $user = $query->fetch(PDO::FETCH_ASSOC);
  $query->closeCursor();
  return $user;
}
// function to have secretary
function isSecretary()
{
  $db = connectToDataBAse();
  $query = $db->query("SELECT * FROM user WHERE status = 'Secretary' ");
  $user = $query->fetch();
  $query->closeCursor();
  return $user;
}

// function to have
function getTeacher()
{
  $db = connectToDataBAse();
  $query = $db->query("SELECT * FROM user WHERE status = 'Teacher' ");
  $user = $query->fetch(PDO::FETCH_ASSOC);
  $query->closeCursor();
  return $user;
}

// function to have all users
function getUsers()
{
  $db = connectToDataBAse();
  $query = $db->query("SELECT * FROM user");
  $result = $query->fetchall(PDO::FETCH_ASSOC);
  $query->closeCursor();
  return $result;
}
// function to have a userSession white last, first_name , code and user_id
function getUserSession($code){
  $reponses = connectToDataBAse()->prepare('SELECT u.last_name, u.first_name, s.code, s.user_id FROM user AS u INNER JOIN session AS s ON u.id_user = s.user_id WHERE code = ?');
  $reponses->execute([$code]);
  $userSession = $reponses->fetch(PDO::FETCH_ASSOC);
  $reponses->closeCursor();
return $userSession;
}

// function to add a user
function addUser($user)
{
  $db = connectToDataBAse();
  $query = $db->prepare('INSERT INTO user(first_name, last_name, password, mail, phone, status) VALUES(:first_name, :last_name, :password, :mail, :phone, :status)');
  $result = $query->execute(array(
      "first_name" => $user["first_name"],
      "last_name" => $user["last_name"],
      "password" => $user["password"],
      "mail" => $user["mail"],
      "phone" => $user["phone"],
      "status" => "user"));
  $query->closeCursor();
  return $result;
}

// fuction to have the last Id enter in the DB
function getLastUserID()
{
  $db = connectToDataBAse();
  $selectLast = $db->query('SELECT id_user FROM user ORDER BY id_user DESC LIMIT 0, 1');
  $lastId = $selectLast->fetch(PDO::FETCH_ASSOC);
  return $lastId['id_user']; // $lastId['id'] cette variable contient le dernier id<br>
  $selectLast->closeCursor();
}

//Fonction for delete a user in bdd
function deleteUser($id) {

  $db = connectToDataBAse();
  $query = $db->prepare("DELETE FROM user WHERE id_user = ?");
  $result = $query->execute([$id]);
  $query->closeCursor();
  return $result;
}

// function to get last/firstname and the key with date
// (date will change cause need to calculate for get the stutus of session if is finish or not)
function getUserAndSession(){
  $db = connectToDataBAse();
  $userSession = $db->prepare("SELECT u.id_user ,u.first_name, u.last_name , s.code , s.created_date ,  s.start_qcm_date , s.end_qcm_date  FROM session AS s INNER JOIN user AS u ON  u.id_user = s.user_id");
  $userSession->execute([]);
  $result = $userSession->fetchall(PDO::FETCH_ASSOC);
  $userSession->closeCursor();
  return $result;
}


// Test for Simon
// test for get date .//////////////////////////////////////////////////////////////////////////////////////////////////

function getSessionNoActive(){
  $db = connectToDataBAse();
  $sessionNoActive = $db->query("SELECT created_date FROM session");
  $result = $sessionNoActive->fetch(PDO::FETCH_ASSOC);
  $sessionNoActive->closeCursor();
  return $result;
}
/////////////////////////////////////////////////

function getSessionActive(){
  $db = connectToDataBAse();
  $sessionActive = $db->query("SELECT start_qcm_date FROM session");
  $result = $sessionActive->fetch(PDO::FETCH_ASSOC);
  $sessionActive->closeCursor();
  return $result;
}
/////////////////////////////////////////////////
function getSessionFinish(){
  $db = connectToDataBAse();
  $sessionFinish = $db->query("SELECT end_qcm_date FROM session");
  $result = $sessionFinish->fetch(PDO::FETCH_ASSOC);
  $sessionFinish->closeCursor();
  return $result;
}
//////////////////////////////////////////////////////////////////////////////////////////////////



//  Start Double function delete for seesionList/////////////////////////////////////////////////
// function to delete the user's Session
function deleteTabUser($idU) {
  $db = connectToDataBAse();
  $query = $db->prepare("DELETE FROM user WHERE id_user = ?");
  $result = $query->execute([$idU]);
  return $result;
}
function deleteTabSession($idS) {
  $db = connectToDataBAse();
  $query = $db->prepare("DELETE FROM session WHERE user_id = ?");
  $result = $query->execute([$idS]);
  return $result;
}
//  End Double function delete for seesionList/////////////////////////////////////////////////
?>
