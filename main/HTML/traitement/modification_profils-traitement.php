<?php

require_once('../modele/modification_profils_class.php');
require_once('../manager/manager.php');

$modification_profils_class = new modification_profils_class($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['mdp']);
$manager=new Manager();
$manager->modification_profils_class($modification_profils_class);



?>
