<?php

require_once "../../config/database.php";

class Serie extends Database {
  private $table = "tbl_serie";

  public function list() {
    $connection = $this->connect();
    $query = $connection->prepare(
      "SELECT s.id, s.title, p.name AS platform,
      CONCAT_WS(' ', d.name, d.last_name) AS director,
      (SELECT GROUP_CONCAT(CONCAT_WS(' ', a.name, a.last_name) SEPARATOR ',<br>')
      FROM tbl_serie_actor sa
      LEFT JOIN tbl_actor a ON sa.actor_id = a.id
      WHERE s.id = sa.serie_id) as actor,
      (SELECT GROUP_CONCAT(l.name SEPARATOR ',<br>')
      FROM tbl_serie_language sl
      LEFT JOIN tbl_language l ON sl.language_id = l.id
      WHERE s.id = sl.serie_id AND type = 'subtitulo') as subtitle,
      (SELECT GROUP_CONCAT(l.name SEPARATOR ',<br>')
      FROM tbl_serie_language sl
      LEFT JOIN tbl_language l ON sl.language_id = l.id
      WHERE s.id = sl.serie_id AND type = 'audio') as audio
      FROM $this->table s
      LEFT JOIN tbl_platform p ON s.platform_id = p.id
      LEFT JOIN tbl_director d ON s.director_id = d.id"
    );
    $query->execute();
    return $query;
  }

  public function detail($id) {
    $connection = $this->connect();
    $query = $connection->prepare("SELECT * FROM $this->table WHERE id = :id");
    $query->execute(array("id" => $id));
    return $query;
  }

  public function byActor($id) {
    $connection = $this->connect();
    $query = $connection->prepare(
      "SELECT a.id, CONCAT_WS(' ', a.name, a.last_name) as name
      FROM tbl_serie_actor sa
      INNER JOIN tbl_actor a ON a.id = sa.actor_id
      WHERE sa.serie_id = :id"
    );
    $query->execute(array($id));
    return $query;
  }

  public function byLanguage($id, $type) {
    $connection = $this->connect();
    $query = $connection->prepare(
      "SELECT l.id as id, l.name as name FROM tbl_serie_language sl
      INNER JOIN tbl_language l ON sl.language_id = l.id
      WHERE sl.type = :type AND sl.serie_id = :id"
    );
    $query->execute(array($type, $id));
    return $query;
  }

  public function addActor($actor_id, $serie_id) {
    $connection = $this->connect();
    $query = $connection->prepare("INSERT INTO tbl_serie_actor (actor_id, serie_id) VALUES (:actor_id, :serie_id)");
    try {
      $query->execute(array($actor_id, $serie_id));
    } catch(PDOException $e) {
      $connection->rollback();
    }
    return $query;
  }

  public function addLanguage($type, $serie_id, $language_id) {
    $connection = $this->connect();
    $query = $connection->prepare(
      "INSERT INTO tbl_serie_language (type, serie_id, language_id)
      VALUES (:type, :serie_id, :language_id)");
    try {
      $query->execute(array($type, $serie_id, $language_id));
    } catch(PDOException $e) {
      $connection->rollback();
    }
    return $query;
  }

  public function create($title, $platform, $director) {
    $connection = $this->connect();
    $query = $connection->prepare(
      "INSERT INTO $this->table (title, platform_id, director_id)
      VALUES(:title, :platform, :director)"
    );
    return array(
      "query" => $query->execute(array($title, $platform, $director)),
      "new_id" => $connection->lastInsertId(),
    );
  }

  public function update($id, $title, $platform, $director) {
    $connection = $this->connect();
    $query = $connection->prepare(
      "UPDATE $this->table
      SET title = :title, platform_id = :platform, director_id = :director
      WHERE id = :id"
    );
    return $query->execute(array($title, $platform, $director, $id));
  }

  public function remove($id) {
    $connection = $this->connect();
    $query = $connection->prepare("DELETE FROM $this->table WHERE id = :id");
    return $query->execute(array("id" => $id));
  }

  public function removeActor($id) {
    $connection = $this->connect();
    $query = $connection->prepare("DELETE FROM tbl_serie_actor WHERE serie_id = :serie_id");
    return $query->execute(array($id));
  }

  public function removeLanguage($id, $type)  {
    $connection = $this->connect();
    $query = $connection->prepare("DELETE FROM tbl_serie_language WHERE serie_id = :serie_id AND type = :type");
    return $query->execute(array($id, $type));
  }
}

