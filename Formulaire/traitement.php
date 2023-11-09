<!DOCTYPE html>
<html>

<head>

    <title>PREMIERS PAS EN PHP </title>
</head>

<body>

    <?php
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $pays = $_POST['pays'];

    if (isset($_FILES['document'])) {


        $emplacement = 'C:\wamp64\www\FormationPhp\dossier_upload/' . basename($_FILES['document']['name']);

        move_uploaded_file($_FILES['document']['tmp_name'], $emplacement);


        echo 'le fichier est bien envoyé' . '<br>';
    } else {


        echo 'Aucun fichier n\'a été trouvé' . '<br>';
    }


    echo 'Mon nom est ' . htmlspecialchars($nom) . '<br>';
    echo 'Mon adresse email est ' . htmlspecialchars($email) . '<br>';
    echo 'Mon pays de résidence est ' . htmlspecialchars($pays) . '<br>';


    ?>

</body>

</html>