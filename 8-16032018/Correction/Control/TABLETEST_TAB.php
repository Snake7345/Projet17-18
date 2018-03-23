<?php
/**
 * Created by PhpStorm.
 * User: theba
 * Date: 23/03/18
 * Time: 18:00
 */
?>

<?php
    require_once '../control/core.php' ;
?>


<?php
    $Tabletest=Model::load("tabletest");
    $Tabletest->read();
    require '../vue/TABLETEST_TAB.php';

?>
