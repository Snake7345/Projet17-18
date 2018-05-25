<?php
/**
 * Created by PhpStorm.
 * User: theba
 * Date: 23/03/18
 * Time: 18:00
 */
?>

<?php
    require_once '../Control/core.php' ;
?>


<?php

    $VarPrenom      ="";
    $where          ="";
    if(isset($_POST['PRENOM']))
    {
        $VarPrenom=$_POST['PRENOM'];
        if($where!="")
        {
            $where.=" and ";
        }
        $where.=" upper(prenom) like upper('%".$VarPrenom."%' )";
    }

    $monFormulaire = new Form('Formulaire','post','?');
    $monFormulaire->addText('Prénom :', 'PRENOM','PRENOM',$VarPrenom,false,'Entrez ici le prénom recherché');
    echo $monFormulaire->getForm();

    $Tabletest=Model::load("tabletest");
    $Tabletest->read(null,$where);
    require '../Vue/TABLETEST_TAB.php';

?>
