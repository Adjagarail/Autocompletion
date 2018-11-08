<?php
include('../Connexion/Config.php');

$db = Connexion();

$valeur = $_GET['valeur'];

$requete = $db->prepare('SELECT * FROM infos WHERE first_name like :valeur');

$requete -> execute(array('valeur' => $valeur.'%'));

    //Creation d'un tableau pour stocker les données
$tableau = array();  

    // Boucle pour parcourir la base de données
while($donnee = $requete->fetch()) 
{
    // Ajout des données apres le parcours de la base de données
    array_push($tableau,$donnee['first_name'],$donnee['last_name']);
}

    // Conversion du tableau du tableau au format json
    echo json_encode($tableau); 
?>