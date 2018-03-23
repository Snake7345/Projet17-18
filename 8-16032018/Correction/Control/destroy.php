<?php
/**
 * Created by PhpStorm.
 * User: Axel
 * Date: 02/02/18
 * Time: 18:26
 */
?>

<?// Sert a la destruction de la session et ensuite renvoi sur la page 1?>

<?php

require '../control/core.php';
session_destroy();
require '../control/page1.php';

?>