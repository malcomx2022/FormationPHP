<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>
        Page Espaces Membres
    </title>
</head>

<body>
    <?php
    if (isset($_SESSION['identifiant']) && isset($_SESSION['motpasse'])) {

        echo 'Votre identifiant est ' . $_SESSION['identifiant'] . 'et votre mot de passe est :' . $_SESSION['motpasse'] . '<br>';

        echo '<a href="deconnexion.php">Déconnexion</a>';
    } else {

        echo 'Vous devez passer par la page de connexion !';
    }
    ?>

</body>

</html>