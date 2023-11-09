<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <?php
    $bddPDO = new PDO('mysql:host=localhost;dbname=webtoup', 'root', "");
    $bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    if (isset($_POST['enregistrer'])) {

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];
        $adresse = $_POST['adresse'];
        $ville = $_POST['ville'];
        $mail = $_POST['mail'];

        if (!empty($nom) && !empty($prenom) && !empty($age) && !empty($adresse) && !empty($ville) && !empty($mail)) {

            //Requete préparée
            $requete = $bddPDO->prepare('INSERT INTO clients (nom,prenom,age,adresse,ville,mail) VALUES (:nom,:prenom,:age,:adresse,:ville,:mail)');

            //Les parametres nommées
            $requete->bindValue(':nom', $nom);
            $requete->bindValue(':prenom', $prenom);
            $requete->bindValue(':age', $age);
            $requete->bindValue(':adresse', $adresse);
            $requete->bindValue(':ville', $ville);
            $requete->bindValue(':mail', $mail);


            $result = $requete->execute();

            if (!$result) {

                echo "Un probleme d'enregistrement n'a pas été effectuer";
            } else {

                echo "
                 
                 <script type=\"text/javascript\"> Alert('Vous etes bien enregistré. Votre identifiant  est : " . $bddPDO->lastInsertId() . "')</script>
                 ";
            }
        } else {

            echo 'Tous les champs sont requis!';
        }
    }
    ?>
    <form action="insertion.php" method="POST">
        <fieldset>
            <legend><b> Vos coordonées</b></legend>


            <table>

                <tr>
                    <td>Nom:</td>
                    <td><input type="text" name="nom" size="50" maxlength="50"></td>
                </tr>

                <tr>
                    <td>Prénom:</td>
                    <td><input type="text" name="prenom" size="50" maxlength="50"></td>
                </tr>

                <tr>
                    <td>Age:</td>
                    <td><input type="number" name="age" size="50" maxlength="3"></td>
                </tr>

                <tr>
                    <td>Adresse:</td>
                    <td><input type="text" name="adresse" size="50" maxlength="100"></td>
                </tr>

                <tr>
                    <td>Ville:</td>
                    <td><input type="text" name="ville" size="50" maxlength="50"></td>
                </tr>

                <tr>
                    <td>Adresse Mail:</td>
                    <td><input type="text" name="mail" size="50" maxlength="50"></td>
                </tr>

                <tr>
                    <td><input type="reset" name="effacer" value="Effacer"></td>
                    <td><input type="submit" name="enregistrer" value="Enregistrer"></td>
                </tr>



        </fieldset>


    </form>
</body>

</html>