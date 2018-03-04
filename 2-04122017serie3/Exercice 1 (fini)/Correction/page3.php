<?php
/**
 * Created by PhpStorm.
 * User: Axel
 * Date: 12/12/17
 * Time: 17:51
 */
?>

<!DOCTYPE html>
<html>
<?php
$soustitre = "Résultat";
require "head.php" ;
?>
<div class="container-fluid">
    <div class="row">
        <header id="header" class="col-lg-10 offset-3">
            <h1>Résultat des boucles:</h1>
        </header>
    </div>
</div>
<div class="container">
    <div class="row">
        <section class="col-lg-10">
            <div class="row">
                <article class="col-sm-4">

                    <h2>Boucle ceci est une ligne + numéro</h2>
                    <p>Exercice 1</p>
                    <?php
                    for ($cpt=0;$cpt <= 10; $cpt++)
                    {
                        echo "Ceci est la ligne n°".$cpt;
                        echo "<br/>";
                    }
                    ?>


                </article>
                <article class="col-sm-4">

                    <h2>Agency</h2>
                    <p>Thème professionel</p>
                </article>
                <article class="col-sm-4">

                    <h2>Freelancer</h2>
                    <p>Thème freelancer</p>
                </article>
                <article class="col-sm-4">

                    <h2>Grayscale</h2>
                    <p>Thème multifonctions</p>
                </article>


            </div>
        </section>
        <aside class="col-lg-2">
            <p>Contenu publicitaire</p>
        </aside>
    </div>
</div>
</body>
</html>