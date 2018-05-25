<?php
$soustitre= 'Formulaire de connexion';
require '../Control/core.php' ;

if(isset($_POST['UTILISATEUR']) && isset($_POST['MDP'])){
    if(Utilisateur::Authentification($_POST['UTILISATEUR'],$_POST['MDP'])) {
        $_SESSION['utilisateur']=$_POST['UTILISATEUR'];
        header("Location: ../Control/page1.php");
    }
}
$monFormulaire = new Form('Formulaire','post','../Control/login.php');
$monFormulaire->addText('Email :','UTILISATEUR','UTILISATEUR','',true,'Pseudo');
$monFormulaire->addPassword('Mot de passe :','MDP','MDP','',true,'Entrez ici votre mot de passe');
$monFormulaire->addSubmit('VALIDER','Valider');


require '../Vue/head.php' ;

echo $monFormulaire->getForm();

require '../Vue/bas.php' ;
?>