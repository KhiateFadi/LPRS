<?php

require('../model/inscription-class.php');
require('../manager/inscription-manager.php');

$inscription = new inscription($_POST['nom'], $_POST['prenom'], $_POST['mdp'], $_POST['mail']);
$manager=new Manager();
$manager->inscription($inscription);

var_dump($inscription);
?>
