<?php
/**
 * Created by PhpStorm.
 * User: Axel
 * Date: 23/01/18
 * Time: 19:09
 */
?>
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
            <h1>Formulaire de contact</h1>
        </header>
    </div>
</div>

<?php
if(!isset($_POST['Envoyer']))
{
echo"
<form method=\"post\" action=\"page5.php\">
    <p>
        <label for=\"Nom\">* Votre nom :</label>
        <br/>
        <input type=\"text\" placeholder='Nom,prénom' name=\"Nom\" id=\"Nom\" required/>

        <br />
        <label for=\"Email\">* Votre email :</label>
        <br/>
        <input type=\"text\" placeholder='Votre mail ici' name=\"Email\" id=\"Email\" required/>
        <br />
        
        <label for=\"Jesuis1\">Je suis :</label>
        <br/>
        <select name=\"Jesuis2\">
        <option value=\"Part.\">Particulier</option>
        <option value=\"Prof.\">Professionnel</option>
        </select>
        <br/>
        
        <label for=\"message\">Votre Message :</label>
        <br/>
        <textarea id=\"Message\" name =\"Message\"placeholder='Votre message ici'></textarea>
        <br/>
        
        <input type=\"checkbox\" id=\"Newsletter\" name=\"Newsletter\" value=\"1\">
        <label for=\"Newsletter\">Souhaitez-vous vous abonner à la newsletter ?</label>
        
    </p>
    <p><input type='submit' value = 'Valider' name='Envoyer'></p>
</form>
";
}
// Récupération + vérification des données + affichage des données
else
{
    $nom=$_POST['Nom'];
    $email=$_POST['Email'];
    $jesuis=$_POST['Jesuis2'];
    $message=$_POST['Message'];
    if (isset($_POST['Newsletter']))
        $newsletter = 'Oui';
    else
        $newsletter = 'Non';

    echo $nom;
    echo "<br/>";
    echo $email;
    echo "<br/>";
    echo $jesuis;
    echo "<br/>";
    echo $message;
    echo "<br/>";
    echo $newsletter;

}

/* Test a faire sur l'adresse mail
 // $email = 'test'; // test avec une chaine qui n'est pas une adresse email
    $email = 'test@example.com'; // test avec une chaine qui est une adresse email

// Vérifie si la chaine ressemble à un email
    if (preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $email))
    {
        echo 'Cet email est correct.';
    }
    else
    {
        echo 'Cet email a un format non adapté.';
    }
*/

/* 'Votre fichier a déjà été envoyé';
$nom=$_POST['Nom'];
$email=$_POST['Email'];
$jesuis=$_POST['Jesuis2'];
$message=$_POST['Message'];
$newsletter=$_POST['Newsletter'];

echo $nom;
echo $email;
echo $jesuis;
echo $message;
echo $newsletter;
*/



/*
if (empty($_POST['Nom']) || empty($_POST['Email']) || empty($_POST['Jesuis2']) || empty($_POST['Message']) || empty($_POST['Newsletter']))
{
    echo "ERREUR : tous les champs n'ont pas ete renseignés.";
}
else
{
    $Nom=$_POST['Nom'];
    $email=$_POST['Email'];
    $jesuis=$_POST['Jesuis2'];
    $message=$_POST['Message'];
    $newsletter=$_POST['Newsletter'];

    if($code==$nb_verif)
    {
        // envoyer un mail
    }
    else echo "ERREUR : le champ de verification....";
}


    //traitement des données reçues par le formulaire
    $nom=$_POST['Nom'];
    $email=$_POST['Email'];
    $jesuis=$_POST['Jesuis2'];
    $message=$_POST['Message'];
    $newsletter=$_POST['Newsletter'];

    echo"Votre message a été transmis";
*/
?>

</body>
</html>