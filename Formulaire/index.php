<!DOCTYPE html>
<html>

<head>

</head>

<body>

    <form>

        <p>
            <label for="nom1">
                Nom:
            </label>

            <input id="nom1" type="text" name="nom" placeholder="Entrer votre nom">
        </p>

        <p>
            <label for="email1">
                Adressse Email:
            </label>

            <input id="email1" type="email" name="email" placeholder="Entrer votre email">
        </p>


        <p>
            <label for="password1">
                Mot de passe:
            </label>

            <input id="password1" type="password" name="password" placeholder="Entrer votre password">
        </p>

        <textarea name="grand-texte" rows="10" cols="100"> Entrer votre texte </textarea>

        <p>
            # selecteur

            <select name="pays">
                <option value="France">France</option>
                <option value="Canada">Canada</option>
                <option value="Allemangne">Allemangne</option>
                <option value="Luxembourg">Luxembourg</option>
            </select>
        </p>
        # checkbox
        <p>
            <input type="checkbox" id="php" name="formation" value="php" checked />
            <label for="php">Formation php</label>

            <input type="checkbox" id="python" name="formation" value="python" />
            <label for="python">Formation python</label>


            <input type="checkbox" id="java" name="formation" value="java" />
            <label for="jav">Formation java</label>


            <input type="checkbox" id="css" name="formation" value="css" />
            <label for="css">Formation css</label>
        </p>
        # radio
        <p>
            Choisisez votre sexe
        </p>
        <p>
            <input type="radio" id="homme" name="sexe" value="homme" />
            <label for="homme">Homme</label>
        </p>

        <p>
            <input type="radio" id="femme" name="sexe" value="femme" />
            <label for="femme">Femme</label>
        </p>

        # file
        <p>
            <input type="hidden" name="MAX_FILE_SIZE" value="1000" />
        </p>
        <p>
            <input type="file" size="1000" name="document" accept="application/msexcel,application/msword,application/pdf,image/gif,image/jpeg" />

        </p>
    </form>

</body>




</html>