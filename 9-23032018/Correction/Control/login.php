<?php
$soustitre= 'Formulaire de connexion';
require '../control/core.php' ;

if(isset($_POST['UTILISATEUR']) && isset($_POST['MDP'])){
    if(Utilisateur::Authentification($_POST['UTILISATEUR'],$_POST['MDP'])) {
        $_SESSION['UTILISATEUR_NOM']=$_POST['UTILISATEUR'];
        $_SESSION['UTILISATEUR_OK']=true;
        header("Location: ../control/page1.php");
    }
}
$monFormulaire = new Form('Formulaire','post','../control/login.php');
$monFormulaire->addText('Email :','UTILISATEUR','UTILISATEUR','',true,'nom.prenom@fournisseur.be');
$monFormulaire->addPassword('Mot de passe :','MDP','MDP','',true,'Entrez ici votre mot de passe');
$monFormulaire->addSubmit('VALIDER','Valider');


require '../vue/head.php' ;

require '../vue/login.php';

require '../vue/bas.php' ;
?>