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
require_once "head.php" ;
?>
<?php require_once "head.php" ; ?>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="Page1.php">Mon Portfolio</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="Page1.php">Home</a></li>
            <li><a href="Page2.php">Me contacter</a></li>
            <li><a href="Page3.php">Resultat</a></li>
            <li class="active"><a href="Page4.php">Tableaux</a></li>
        </ul>
    </div>
</nav>
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
                    $jourdelasemaine = array('Lundi', 'Mardi', 'Mercredi','Jeudi','Vendredi', 'Samedi', 'Dimanche')

                    ?>




                </article>

                <article class="col-sm-4">

                    <h2>Tableau associatif</h2>
                    <p>Exercice 2</p>



                </article>

                <article class="col-sm-4">

                    <h2>tableau indicé 52</h2>
                    <p>Exercice 3</p>



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