<?php
/**
 * Created by PhpStorm.
 * User: theba
 * Date: 09/02/18
 * Time: 19:56
 */

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



                        echo 'Le personnage 1 a ', $perso1->getforce(), ' de force, contrairement au personnage 2 qui a ', $perso2->getforce(), ' de force.<br />';

                        echo 'Le personnage 1 a ', $perso1->getexperience(), ' d\'expérience, contrairement au personnage 2 qui a ', $perso2->getexperience(), ' d\'expérience.<br />';

                        echo 'Le personnage 1 a ', $perso1->getdegats(), ' de dégâts, contrairement au personnage 2 qui a ', $perso2->getdegats(), ' de dégâts.<br />';

                        ?>


                    </article>

                    <article class="col-sm-10">

                        <h2>Exercice 2</h2>
                        <p>Formulaire</p>

                        <?php

						echo $monFormulaire->getForm();

                        ?>

                    </article>

                </div>
            </section>
            <aside class="col-lg-2">
                <p>Contenu publicitaire</p>
            </aside>


        </div>
    </div>