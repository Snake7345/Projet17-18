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

                    <h2>Boucle ceci est une ligne + numéro (liste a puce)</h2>
                    <p>Exercice 2</p>
                    <?php

                    for ($cpt=0;$cpt <= 10; $cpt++)
                    {

                        echo '<ul><li>'."Ceci est la ligne n°".$cpt.'</li></ul>';
                    }
                    ?>
                </article>
                <article class="col-sm-4">

                    <h2>Boucle + tableau dynamique</h2>
                    <p>Exercice 3</p>

                    <?php
                    echo'<table border>';
                    $tablignes = array();

                    for ($cpt=0;$cpt <= 10; $cpt++)
                    {

                        $tablignes[$cpt] = "Ceci est la ligne n°".$cpt;


                    }
                    echo'<tr><td>'."#".'</td><td>'."Libellé".'</td></tr>';
                    $cpt2 = 0;
                    foreach ($tablignes as $element)
                    {
                        echo '<tr><td>'.$cpt2.'</td><td>'.$element.'</td></tr>';
                        $cpt2 = $cpt2+ 1;
                    }
                    echo '</table>'
                    ?>

                </article>
                <article class="col-sm-4">

                    <h2>Tableau avec couleur</h2>
                    <p>Exercice 4</p>

                    <?php
                    echo'<table border>';
                    $tablignes = array();

                    for ($cpt=0;$cpt <= 10; $cpt++)
                    {

                        $tablignes[$cpt] = "Ceci est la ligne n°".$cpt;


                    }
                    echo'<tr><td>'."#".'</td><td>'."Libellé".'</td></tr>';
                    $cpt2 = 0;
                    foreach ($tablignes as $element)
                    {
                        if($cpt2 % 2 == 0)
                        {
                            echo '<tr bgcolor = "red"><td>' . $cpt2 . '</td><td>' . $element . '</td></tr>';
                            $cpt2 = $cpt2 + 1;
                        }
                        else
                        {
                            echo '<tr bgcolor = "#00bfff"><td>' . $cpt2 . '</td><td>' . $element . '</td></tr>';
                            $cpt2 = $cpt2 + 1;
                        }
                    }
                    echo '</table>'
                    ?>
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