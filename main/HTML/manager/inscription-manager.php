<?php

Class Manager{

public function inscription($jul){
        $bdd = new PDO('mysql:host=localhost;dbname=lprs;charset=utf8','root','');

        $req = $bdd->prepare('INSERT INTO utilisateur(nom, prenom, mdp, mail) VALUES(:nom, :prenom, :mdp, :mail)');
        $a = $req->execute(array('nom'=>$jul->getNom(), 'prenom'=>$jul->getPrenom(), 'mdp'=>$jul->getMdp(), 'mail'=>$jul->getMail())));
  var_dump($a);
  }

}
?>
