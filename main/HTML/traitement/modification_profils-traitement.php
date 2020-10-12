<?php

require_once('../modele/modification_profils_class.php');
require_once('../manager/manager.php');

$modification_profils_class = new modifier_profils_class($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['mdp']);
$manager = new Manager();
var_dump($manager);
$manager->modification_user($modification_profils_class,$_SESSION['id']);







?>
