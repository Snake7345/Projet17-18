<?php
/**
 * Created by PhpStorm.
 * User: theba
 * Date: 24/01/18
 * Time: 18:43
 */

$errors = [];


/* Ce qui a été fait avant
 * -------------------------------
 * if (filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL))
{
    echo "";
}
else
{
    $errors['Email'] ='Cet email a un format non adapte.(mettez un arobase et un point)';
}
if(!array_key_exists('Email',$_POST)|| $_POST['Email'] == '')
{
    $errors['Email']="Vous n'avez pas renseigne votre Email";
}
*/

// Si la personne veut recharger la page post_contact sans passer par le formulaire il aura ces erreurs

if(!array_key_exists('Email',$_POST)|| $_POST['Email'] == '' || !filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL))
{
    $errors['Email']= "Vous n'avez pas renseigne votre Email ou cet email a un format non adapte.(mettez un arobase et un point)";
}
if(!array_key_exists('Nom',$_POST)|| $_POST['Nom'] == '')
{
    $errors['Nom']= "Vous n'avez pas renseigne votre Nom";
}
if(!array_key_exists('Message',$_POST)|| $_POST['Message'] == '')
{
    $errors['Message']= "Vous n'avez pas renseigne votre Message";
}

// Si il n'y a pas d'erreurs alors on affiche si pas on réaffiche la page du formulaire

if(!empty($errors))
{
    session_start();
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location : page5.php');
}
else
    {
        $nom=$_POST['Nom'];
        $email=$_POST['Email'];
        $jesuis=$_POST['Jesuis2'];
        $message=$_POST['Message'];
        if (isset($_POST['Newsletter'])) {
            $newsletter = 'Oui';
        }
        else {
            $newsletter = 'Non';
        }
        echo "Votre nom : ";
        echo $nom;
        echo "<br/>";
        echo "Votre email : ";
        echo $email;
        echo "<br/>";
        echo "Vous etes : ";
        echo $jesuis;
        echo "<br/>";
        echo "Votre message : ";
        echo $message;
        echo "<br/>";
        echo "Newsletter : ";
        echo $newsletter;
    }

    var_dump($errors)
?>