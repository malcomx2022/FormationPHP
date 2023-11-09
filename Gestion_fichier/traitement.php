<!DOCTYPE html>
<html>

<head>
    <title>
        Traitement de données
    </title>
</head>

<body>
    <?php

    $identifiant_valide = "Aminet";
    $motpasse_valide = "motpasse123";

    if ($_POST['identifiant'] == $identifiant_valide && $_POST['motpasse'] == $motpasse_valide) {

        session_start();


        $_SESSION['identifiant'] = $_POST['identifiant'];
        $_SESSION['motpasse'] = $_POST['motpasse'];

        echo '<br>';
        echo 'Bonjour , vous etes connectés à l\'aide de l\'identifiant ' . $_SESSION['identifiant'];
        echo '<br>';
        echo '<a href="page_espace_membres.php">Espace membre</a>';
    } else {

        echo 'Désolé , l\'identifiant ou le mot de passe saisis ne sont pas valides ';
    }

    ?>

</body>

</html>