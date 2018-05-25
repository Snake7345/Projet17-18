<?php
/**
 * Created by PhpStorm.
 * User: theba
 * Date: 09/03/18
 * Time: 19:48
 */
?>

<?//Démarre la session et charge la classe personnage et ses méthodes ainsi que le formulaire?>
<?php
// Démarre la session
session_start();

require_once '../Control/Personnage.php';
require_once '../Control/Utilisateur.php';
require_once '../Vue/Form.php';
require_once '../Model/model.php';

if(!isset($_SESSION['utilisateur']) && !strpos($_SERVER['REQUEST_URI'], '/Control/login.php') ){
    header("Location: ../Control/login.php");
}


?>