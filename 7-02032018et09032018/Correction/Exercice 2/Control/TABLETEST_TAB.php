<?php
/**
 * Created by PhpStorm.
 * User: theba
 * Date: 25/05/18
 * Time: 20:21
*/
?>

<?php
require_once '../control/core.php' ;
?>


<?php
$Tabletest=Model::load("tabletest");
$Tabletest->read();
require '../vue/TABLETEST_TAB.php' ;
?>
