<?php
//appeler le fichier de la class wines
require_once(dirname(__DIR__) . '/models/Wines.php');

//l'instancier :
$model = new Wines();
$sql = $model->list();


// méthode native de php qui prend le resultat sql du fetchAll (toutes les donnée de la table mysql)et le passe au format json puis les affiche
echo json_encode($sql->fetchAll());

?>