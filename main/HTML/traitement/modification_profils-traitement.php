<?php

require('../modele/modification_profils_class.php');
require('../manager/manager.php');

$modification_profils_class = new modification_profils_class($_POST['nom'], $_POST['prenom'], $_POST['mdp'], $_POST['mail']);
$manager=new Manager();
$manager->modification_profils_class($modification_profils_class);


?>
