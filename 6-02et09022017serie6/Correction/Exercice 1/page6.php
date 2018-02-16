<?php
/**
 * Created by PhpStorm.
 * User: theba
 * Date: 09/02/18
 * Time: 19:56
 */

$soustitre = "Personnage";
require "head.php" ;
?>
    <div class="container-fluid">
        <div class="row">
            <header id="header" class="col-lg-10 offset-3">
                <h1>Serie 6 : les classes</h1>
            </header>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <section class="col-lg-10">
                <div class="row">
                    <article class="col-sm-10">

                        <h2>Exercice 1</h2>
                        <p>Combattez</p>

                        <?php
                        $perso1= new Personnage(50,5);
                        $perso2= new Personnage(100,23);
                        $perso1->frapper($perso2);
                        $perso1->gagnerExperience();
                        $perso2->frapper($perso1);
                        $perso2->gagnerExperience();


                        echo 'Le personnage 1 a ', $perso1->getforce(), ' de force, contrairement au personnage 2 qui a ', $perso2->getforce(), ' de force.<br />';

                        echo 'Le personnage 1 a ', $perso1->getexperience(), ' d\'expérience, contrairement au personnage 2 qui a ', $perso2->getexperience(), ' d\'expérience.<br />';

                        echo 'Le personnage 1 a ', $perso1->getdegats(), ' de dégâts, contrairement au personnage 2 qui a ', $perso2->getdegats(), ' de dégâts.<br />';

                        ?>


                    </article>

                    <article class="col-sm-10">

                        <h2>Exercice 2</h2>
                        <p>Formulaire</p>



                    </article>

                </div>
            </section>
            <aside class="col-lg-2">
                <p>Contenu publicitaire</p>
            </aside>


        </div>
    </div>
<?php
require 'bas.php' ;
?>