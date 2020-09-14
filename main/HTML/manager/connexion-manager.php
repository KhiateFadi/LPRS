<?php
session_start();
Class Manager{

public function connexion($jul){
        $bdd = new PDO('mysql:host=localhost;dbname=lprs;charset=utf8','root','');


  $red = $bdd->prepare('SELECT * FROM utilisateur WHERE mail=:mail AND mdp=:mdp ');
  $red->execute(array('mail'=> $jul->getMail(), 'mdp'=>md5($jul->getMdp())));
  $c = $red->fetch();

  if ($c == true) {
    $_SESSION['mail'] = $mail;
    $_SESSION['mdp'] = $mdp;
    $_SESSION['id'] = $c['id'];
    $_SESSION['mail'] = $c['mail'];
    $_SESSION['mdp'] = $c['mdp'];
    header('Location: ../index.html');


  }
  else {
    echo "Mauvais login veuillez réessayer !";
    header('Location:../connexion.html');
  }

  }

}

?>
