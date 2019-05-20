<?php
if(!isset($_GET['login']) && !isset($_GET['motdepasse']))
{
    header('Location: index.php');
    Exit;
}
else
{

}

if(!isset($_GET['login']) && !isset($_GET['motdepasse']))
{
    header('Location: index.php');
}
else
{
    // On va vérifier les variables
    if(!preg_match('/^[[:alnum:]]+$/', $_GET['login']) or
!preg_match('/^[[:alnum:]]+$/', $_GET['motdepasse']))
    {
        echo 'Vous devez entrer uniquement des lettres ou des chiffres <br/>';
        echo '<a href="index.php" temp_href="index.php">Réessayer</a>';
        exit();
    }
    else
    {
        require('config.php'); // On réclame le fichier
        $login = $_GET['login'];
        $motdepasse = $_GET['motdepasse'];
    }
}

?>