<!DOCTYPE html>
<html>

<head>
    <title>
        PREMIERS PAS EN PHP
    </title>
</head>

<body>
    <h1>Formulaire de connexion</h1>
    <form action="traitement.php" method="POST">
        <p>
            <label for="identifiant">
                Votre Identifiant:
            </label>
            <input id="identifiant" type="text" name="identifiant">
        </p>
        <p>
            <label for="motpasse">
                Votre Mot de Passe:
            </label>
            <input id="password" type="password" name="motpasse">
        </p>
        <p>
            <input type="submit" value="Connexion">
        </p>
    </form>
</body>

</html>