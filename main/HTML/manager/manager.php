<?php
Class Manager{

public function connexion($con){
session_start();
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
    header('Location:../index.html');
  }

  }

  public function inscription($new){
          $bdd = new PDO('mysql:host=localhost;dbname=lprs;charset=utf8','root','');

          $req = $bdd->prepare('INSERT INTO utilisateur(nom, prenom, mdp, mail) VALUES(:nom, :prenom, :mdp, :mail)');
          $a = $req->execute(array('nom'=>$new->getNom(), 'prenom'=>$new->getPrenom(), 'mdp'=>md5($new->getMdp()), 'mail'=>$new->getMail()));
          $b = $req->fetch();
if ($b == true) {
            $_SESSION['id'] = $b['id'];

            header('Location: ../index.html');


          }
          else {
           echo "Mauvais login veuillez réessayer !";
           header('Location:../index.html');
          }
    }

    public function modifier_les_donnees_utilisateur(modification_profils_class $user)
    	    {
            require_once("../modele/modification_profils_class.php");
            $bdd = new PDO('mysql:host=localhost;dbname=lprs;charset=utf8','root','');

    	        $request = $bdd->prepare(' UPDATE utilisateur SET nom = :nom, prenom = :prenom, mail = :mail, mdp = :mdp WHERE id = :id');
    	        $request->execute(array(
    	            'nom' => $user->getNom(),
    	            'prenom' => $user->getPrenom(),
    	            'mail' => $user->getMail(),
    	            'mdp' => $user->getMdp(),
    	            'id' => $user->getId()
    	        ));

    	            header('Location: ../index.html');
    	    }


}

?>
