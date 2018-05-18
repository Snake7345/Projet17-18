<?php
/**
 * Created by PhpStorm.
 * User: theba
 * Date: 20/04/18
 * Time: 18:58
 */
?>

<?php
class Utilisateur{
    public static function Authentification($pUtilisateur,$pMdp){
        $utilisateurs=Model::load("utilisateurs");
        $utilisateurs->id=$pUtilisateur;
        $utilisateurs->read();
        if($utilisateurs->data[0]->code==$pMdp){
            return true;
        }
        else{
            return false;
        }
    }

}

?>
