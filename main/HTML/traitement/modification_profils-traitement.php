<?php

require_once('../modele/modification_profils_class.php');
require_once('../manager/manager.php');
var_dump($_POST);
die();
$modification_profils_class = new modifier_profils_class($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['mdp']);
$manager = new Manager();
$manager->modification_user($modification_profils_class);



?>
