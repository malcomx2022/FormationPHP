<!DOCTYPE html>
<html>

<head>
    <title>
        Récupération de la base de données
    </title>
</head>

<body>
    <?php
    //connexionn à la base de données 

    // instanciation d'un objet PDO pour créer une connexion à la base de donnée

    $bddPDO = new PDO('mysql:host=localhost;dbname=webtoup', 'root', "");
    $bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $requete = "SELECT * FROM clients ORDER BY id_client  ASC";
    $result = $bddPDO->query($requete);

    if (!$result) {

        echo "La récupération des données a rencontré un problème!";
    } else {

        $nbre_clients = $result->rowCount();
    }
    ?>

    <h3>Tous nos clients</h3>
    <h4> Il y a <?php echo $nbre_clients ?> client(s)</h4>

    <table border="1">

        <tr>
            <th>Numéro de clients</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Age</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Mail</th>
        </tr>

        <?php

        while ($ligne = $result->fetch(PDO::FETCH_NUM)) {

            echo "<tr>";
            foreach ($ligne as $valeur) {
                echo "<td>$valeur</td>";
            }

            echo "</tr>";
        }
        ?>

    </table>

    <?php
    $result->closeCursor();


    ?>
</body>

</html>