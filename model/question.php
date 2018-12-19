<?php

//Fonction qui récupère le dernière ID de la question
function getLastQuestionID()
{
  $db = connectToDataBAse();
  $selectLast = $db->query('SELECT id_question FROM question ORDER BY id_question DESC LIMIT 0, 1');
  $lastId = $selectLast->fetch(PDO::FETCH_ASSOC);
  return $lastId['id_question']; // $lastId['id'] cette variable contient le dernier id<br>
  $selectLast->closeCursor();
}


//Fonction qui récupère toutes les questions de la table dans la DB
function getQuestions()
{
    $db = connectToDataBAse();
    $query = $db->query("SELECT * FROM question");
    $questions = $query->fetchall(PDO::FETCH_ASSOC);
    return $questions;
    $query->closeCursor();
}

//Fonction qui récupère une seule question de la DB sur la base de son id
function getQuestion($id)
{
    $db = connectToDataBAse();
    $query = $db->prepare("SELECT * FROM question WHERE id=?");
    $query->execute([$id]);
    $question = $query->fetch(PDO::FETCH_ASSOC);
    return $question;
    $query->closeCursor();
}

//Fonction qui ajoute une question en DB
function addQuestion()
{
    $db = connectToDataBAse();
    $query = $db->prepare("INSERT INTO question (question) VALUES(:question)");
    $result = $query->execute([
        "question" => $_POST["question"],
    ]);
}
//Add Reponse to the datatbase
function addReponse($question_id)
{
     $db = connectToDataBAse();
     $query = $db->prepare("INSERT INTO reponse (reponse, question_id) VALUES(:reponse, :question_id)");
     $result = $query->execute([
        "reponse" => $_POST["reponse"],
        "question_id" => $question_id
      ]);
}

//Fonction pour modifier les valeurs d'une question en base de données
function updateQuestion($question)
{
    $db = connectToDataBAse();
    $query = $db->prepare("UPDATE question SET question = :question WHERE id_question = :id");
    $result = $query->execute([
        "id" => $question["id"],
        "question" => $question["question"]
    ]);
    return $result;
    $query->closeCursor();
}

//Fonction pour supprimer une question en base de données
function deleteQuestion($id)
{
    $db = connectToDataBAse();
    $query = $db->prepare("DELETE FROM question WHERE id = ?");
    $result = $query->execute([$id]);
    return $result;
    $query->closeCursor();
}
