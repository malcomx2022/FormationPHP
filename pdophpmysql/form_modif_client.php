<!DOCTYPE html>
<html>

<head>
    <title>
        Formulaire de modification
    </title>
</head>

<body>
    <form action="modif_client.php" method="POST">
        <fieldset>
            <legend><b> Saisisez votre identifiant client pour modifier vos coordonées</b></legend>
            <table>
                <tr>
                    <td>Code client:</td>
                    <td><input type="text" name="id_client" size="20" maxlength="10"></td>
                </tr>

                <tr>
                    <td>Modifier:</td>
                    <td><input type="submit" value="Modifier" name="modifier"></td>
                </tr>
            </table>
        </fieldset>


    </form>
</body>

</html>