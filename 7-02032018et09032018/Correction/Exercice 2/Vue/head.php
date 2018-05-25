<?php
/**
 * Created by PhpStorm.
 * User: Axel
 * Date: 04/12/17
 * Time: 20:30
 */
?>

<?// Cette page sert à afficher le haut de la page et gère la session de l'utlisateur ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $soustitre ?></title>
    <link rel="stylesheet" href="page.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
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
            <li><a href="Page4.php">Tableaux</a></li>
            <li><a href="Page5.php">Les Sessions</a> </li>
            <li><a href="Page6.php">S6Les Classes</a> </li>
        </ul>
    </div>
</nav>

<?php if(isset($_SESSION['UTILISATEUR_OK']) && isset($_SESSION['UTILISATEUR_NOM'])){
    echo 'Bienvenue '.$_SESSION['UTILISATEUR_NOM'];
    echo '<form action="destroy.php" method="post" accept-charset="utf-8">';
    echo '	<input type="submit" name="" value="Se déconnecter">';
    echo '</form>';
} ?>