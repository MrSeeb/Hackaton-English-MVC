<?php
// function to have all sessions test
function getSessions()
{
  $db = connectToDataBAse();
  $query = $db->query("SELECT * FROM session");
  $sessions = $query->fetchall(PDO::FETCH_ASSOC);
  return $sessions;
}

// function to have one session
function getSession($user_id)
{
  $db = connectToDataBAse();
  $query = $db->prepare("SELECT * FROM session WHERE user_id=?");
  $query->execute([$user_id]);
  $session = $query->fetch(PDO::FETCH_ASSOC);
  return $session;
}

//Function for converter id_user of Session table to first_name,last_name of User table
function getJoinUserSession(){
  $db = connectToDataBAse();
  $query = $db->query("SELECT s.*, u.first_name, u.last_name FROM session AS s INNER JOIN user AS u WHERE s.user_id = u.id_user");
  $result = $query->fetchall(PDO::FETCH_ASSOC);

  return $result;
  $query->closeCursor();
}
//Function get information of user by id_session
function getUserbySessionID($id){
  $db = connectToDataBAse();
  $query = $db->prepare("SELECT s.id_session, s.created_date, s.start_qcm_date, u.id_user, u.first_name, u.last_name FROM session AS s INNER JOIN user AS u WHERE $id = u.id_user");
  $query->execute([$id]);
  $result = $query->fetch(PDO::FETCH_ASSOC);

  return $result;
  $query->closeCursor();
}

// function ok for user_id and created_date
function addSession($session, $user_id, $code)
{
  $db = connectToDataBAse();
  $query = $db->prepare("INSERT INTO session (user_id, code, created_date, start_qcm_date, end_qcm_date, result, level) VALUES(:user_id, :code, CURDATE(), :start_qcm_date, :end_qcm_date, :result, :level)");
  $result = $query->execute([
    "user_id" => $user_id,
    "code" => $code,
    "start_qcm_date" => $session["start_qcm_date"],
    "end_qcm_date" => $session["end_qcm_date"],
    "result" => $session["result"],
    "level" => $session["level"]
  ]);
  return $result;
  $query->closeCursor();
}

//random and unid string
function uniqCode($car)
{
  $code = "";
  $option = "abcdefghijklmnpqrstuvwxyABCDEFGHIJKLMNOPQRSTUVWXYZ01234567890";
  srand((double)microtime()*1000000);
  for($i=0; $i<$car; $i++)
  {
    $code .= $option[rand()%strlen($option)];
  }
  return $code;
}
?>
