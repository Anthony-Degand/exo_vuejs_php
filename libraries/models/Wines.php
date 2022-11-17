<?php
// On appel la connection à la base de donnée
require_once (dirname(__DIR__) . '/config/database.php');

class Wines // crée une class 
{
  protected $pdo; // appel la variable pdo

  public function __construct()
  {
    $this->pdo = getPdo(); // this->pdo = appel de notre base de donnée
  }
  
  public function list() //fonction list
  {
    // tous selectionner dans la table wines classer par date de publication décroissantes
    $sql = $this->pdo->query(" 
      SELECT * 
      FROM wines 
      ORDER BY publish_date 
      DESC
    ");
    $sql->setFetchMode(\PDO::FETCH_ASSOC);

    return $sql;
  }
}