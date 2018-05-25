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
require '../Control/core.php' ;
require '../Vue/head.php';

$perso1= new Personnage(50,5);
$perso2= new Personnage(100,23);
$perso1->frapper($perso2);
$perso1->gagnerExperience();
$perso2->frapper($perso1);
$perso2->gagnerExperience();

$monFormulaire = new Form('Formulaire','post','http://dero-promsocatc.alwaysdata.net/index.php');
$monFormulaire->addText('NOM :','NOM','NOM','',true,'Entrez ici votre nom');
$monFormulaire->addEmail('Email :','EMAIL','EMAIL','',true,'nom.prenom@fournisseur.be');
$monFormulaire->addSubmit('VALIDER','Valider');


require'../Vue/page6.php';
require'../Vue/bas.php';


?>
