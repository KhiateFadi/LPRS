<?php
session_start();
Class Manager{

public function connexion($con){
        $bdd = new PDO('mysql:host=localhost;dbname=lprs;charset=utf8','root','');


  $red = $bdd->prepare('SELECT * FROM utilisateur WHERE mail=:mail AND mdp=:mdp ');
  $red->execute(array('mail'=> $con->getMail(), 'mdp'=>md5($con->getMdp())));
  $c = $red->fetch();

  var_dump($con);

  if ($c == true) {
    $_SESSION['id'] = $c['id'];

    header('Location: ../index.html');


  }
  else {
    echo "Mauvais login veuillez réessayer !";
    header('Location:../indeex.html');
  }

  }

}

?>
