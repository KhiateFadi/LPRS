<?php

Class Manager{

public function inscription($new){
        $bdd = new PDO('mysql:host=localhost;dbname=lprs;charset=utf8','root','');

        $req = $bdd->prepare('INSERT INTO utilisateur(nom, prenom, mdp, mail) VALUES(:nom, :prenom, :mdp, :mail)');
        $a = $req->execute(array('nom'=>$new->getNom(), 'prenom'=>$new->getPrenom(), 'mdp'=>md5($new->getMdp()), 'mail'=>$new->getMail()));
  var_dump($a);
  }

}
?>
