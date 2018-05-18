<?php
/**
 * Created by PhpStorm.
 * User: theba
 * Date: 09/03/18
 * Time: 19:32
 */
?>

<?php
$soustitre= "Formulaire";
require '../Control/core.php' ;
require_once "../Vue/head.php";

$VarNom 	 ="";
$VarEmail 	 ="";
$VarErrNom 	 ="";
$VarErrEmail ="";
if (isset($_POST['NOM'])){
    $VarNom=$_POST['NOM'];
    if(strpos($_POST['NOM'], ',')==false){
        $VarErrNom 	 ='<div class="alert alert-warning"> La zone doit contenir une virgule entre le nom et le prénom </div>';
    }
}
if (isset($_POST['EMAIL'])){
    $VarEmail=$_POST['EMAIL'];
    if (!preg_match("#[a-zA-Z0-9\.]{1,}[@][a-zA-Z0-9\.]{1,}[\.][a-zA-Z0-9\.]{1,}#", $VarEmail)){
        $VarErrEmail ='Email non conforme';
    }
    if(strpos($_POST['EMAIL'], '.')==false){
        $VarErrEmail .='La zone doit contenir un point';
    }
    if(strpos($_POST['EMAIL'], '@')==false){
        if($VarErrEmail!=''){
            $VarErrEmail .=	'<br/>';
        }
        $VarErrEmail .='La zone doit contenir un @';
    }
    if($VarErrEmail!=''){
        $VarErrEmail =	'<div class="alert alert-warning">'.$VarErrEmail.'</div>';
    }

}
if($VarErrNom=='' && $VarErrEmail=='' && $VarNom!=''){
    $_SESSION['UTILISATEUR_NOM'] 	= $VarNom;
    $_SESSION['UTILISATEUR_OK'] 	=  1;
}

require_once "../Vue/page5.php";
require_once "../Vue/bas.php";

?>
