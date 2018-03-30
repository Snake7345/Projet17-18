<?php
/**
 * Created by PhpStorm.
 * User: theba
 * Date: 09/03/18
 * Time: 19:32
 */
?>

<?php
$soustitre = "Personnage";
require_once "../Vue/head.php";

$perso1= new Personnage(50,5);
$perso2= new Personnage(100,23);
$perso1->frapper($perso2);
$perso1->gagnerExperience();
$perso2->frapper($perso1);
$perso2->gagnerExperience();

$monFormulaire = new Form('Formulaire','post','http://dero-promsocatc.alwaysdata.net/index.php');
$monFormulaire->setText('NOM :','NOM','NOM','',true,'Entrez ici votre nom');
$monFormulaire->setEmail('Email :','EMAIL','EMAIL','',true,'nom.prenom@fournisseur.be');
$monFormulaire->setSubmit('VALIDER','Valider');


require_once "../Vue/page6.php";
require_once "../Vue/bas.php";


?>
