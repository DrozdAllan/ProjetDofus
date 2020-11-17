<?php require_once('libraries/database.php');

    $pdo = getPdo();

    // Recup donnees connexion
    $Compte = htmlspecialchars($_POST['ConnexionCompte']);
    $Mdp = htmlspecialchars($_POST['ConnexionMdp']);

    // preparation à la recup id et mdp de la DB
    $sth = $pdo->prepare("SELECT IDNumber, Mdp FROM infodesgens WHERE Compte='$Compte'");
    //execution
    $sth->execute();
    $resultat = $sth->fetch();

    // Comparaison du mdp hash
$isPasswordCorrect = password_verify($Mdp, $resultat['Mdp']);



if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
if ($isPasswordCorrect) {
    session_start();
    $_SESSION['id'] = $resultat['IDNumber'];
    $_SESSION['pseudo'] = $Compte;
    echo 'Vous êtes connecté : ' . $_SESSION['pseudo'];
}
else {
    echo 'Mauvais identifiant ou mot de passe !';
}

}
    $conn = null;



    include_once("PageBanner.php");
    ?>
