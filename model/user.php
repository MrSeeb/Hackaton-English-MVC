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

// function to have all users
function getUsers($db)
{
  $query = $db->query("SELECT * FROM user");
  $result = $query->fetchall(PDO::FETCH_ASSOC);
  $query->closeCursor();
  return $result;
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
function deleteUser($id, $db) {
  $query = $db->prepare("DELETE FROM user WHERE id_user = ?");
  $result = $query->execute([$id]);
  $query->closeCursor();
  return $result;
}

?>
