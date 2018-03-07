<?php
/**
 * Created by PhpStorm.
 * User: theba
 * Date: 31/12/17
 * Time: 03:13
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
            <h1>Les tableaux en PHP:</h1>
        </header>
    </div>
</div>
<div class="container">
    <div class="row">
        <section class="col-lg-10">
            <div class="row">
                <article class="col-sm-4">

                    <h2>Tableau indicé 1</h2>
                    <p>Exercice 1</p>
                    <?php


                    // $NbrLigne : le nombre de lignes
                    // $NbrCol : le nombre de colonnes : calcul automatique
                    // --------------------------------
                    // (exemple)
                    $NbrLigne = 7;
                    $jourdelasemaine = array('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche');
                    // --------------------------------
                    // $NbreData : le nombre de données à afficher
                    $NbreData = count($jourdelasemaine);
                    // --------------------------------
                    $NbrCol = 0;
                    // affichage
                    if ($NbreData != 0)
                    {
                        $cpt1 = 0; // indice du tableau
                        ?>
                        <table>
                            <tbody>
                            <tr>
                                <?php
                                while ($cpt1 < $NbreData)
                                {
                                    ?>
                                    <td valign="top">
                                    <table border>
                                    <?php
                                    for ($cpt2=1; $cpt2<=$NbrLigne; $cpt2++)
                                     {
                                        if ($cpt1 < $NbreData)
                                        {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php
                                                    // -------------------------
                                                    // DONNEES A AFFICHER dans la cellule
                                                    echo $jourdelasemaine[$cpt1];
                                                    // -------------------------
                                                    ?>
                                                </td>
                                            </tr>
                                            <?php
                                            $cpt1++;
                                        }
                                        if ($cpt2 == $NbrLigne)
                                        {
                                            ?>
                                            </table>
                                            </td>
                                            <?php
                                        }
                                    }
                                    $NbrCol++;
                                }
                                ?>
                            </tr>
                            <tbody>
                        </table>
                        <?php
                    }
                    else
                        {
                        ?>	pas de données à afficher
                        <?php
                        }
                    ?>
                </article>

                <article class="col-sm-4">

                    <h2>Tableau associatif pour chaque jour de la semaine</h2>
                    <p>Exercice 2</p>

                    <?php

                    $dayactivite = array
                    (
                            array("Lundi","Ecole"),
                            array("Mardi","Ecole"),
                            array("Mercredi","Ecole"),
                            array("Jeudi","Ecole"),
                            array("Vendredi","Ecole"),
                            array("Samedi","Maison"),
                            array("Dimanche","Maison")
                    );

                    echo '<table border>';

                    echo '<thead>';
                    echo '<tr>';
                    echo '<th>Jours</th>';
                    echo '<th>Activité</th>';
                    echo '</tr>';
                    echo '</thead>';


                    for($cpt3 = 0; $cpt3 <7; $cpt3++)
                    {

                        echo '<tr><td>';
                        echo $dayactivite[$cpt3][0];
                        echo '</td>';
                        echo '<td>';
                        echo $dayactivite[$cpt3][1];
                        echo '</td></tr>';
                    }
                    echo '</table>';
                    ?>


                </article>

                <article class="col-sm-6">

                    <h2>tableau indicé 52</h2>
                    <p>Exercice 3</p>
                    <?php

                    $Semainetabind = array();
                    for($cpt4=0; $cpt4 < 52; $cpt4++)
                    {
                        $Semainetabind[$cpt4] = $dayactivite;
                    }

                    echo '<table border>';

                    echo '<thead>';
                    echo '<tr>';
                    echo '<th>Semaine</th>';
                    echo '<th>Jour</th>';
                    echo '<th>Ce que je fais</th>';
                    echo '</tr>';
                    echo '</thead>';




                    for($cpt5 = 0; $cpt5 < 52; $cpt5++)
                    {
                        $FirstRead = false;
                        for($cpt6 = 0; $cpt6 < 7; $cpt6++)
                        {
                            echo '<tr><td>';
                            if($FirstRead == false)
                            {
                                echo $cpt5 + 1;
                                $FirstRead = true;
                            }
                            echo '</td>';
                            echo '<td>';
                            echo $Semainetabind[$cpt5][$cpt6][0];
                            echo '</td>';
                            echo '<td>';
                            echo $Semainetabind[$cpt5][$cpt6][1];
                            echo '</td></tr>';
                        }

                    }

                    echo '</table>';
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