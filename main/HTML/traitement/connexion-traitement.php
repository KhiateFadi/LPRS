<?php

require('../manager/connexion-manager.php');
require('../model/connexion-class.php');

$user = new Connexion($_POST['mail'], $_POST['mdp']);
$manager = new Manager();
$manager->connexion($user);
var_dump($user);
