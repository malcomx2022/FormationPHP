<?php
session_start();
?>

<!DOCTYPE html>


<html>

<head>
    <title>
        Page Espace Membres
    </title>
</head>

<body>
    <?php
    //On détruit les variations de notre session 

    session_unset();

    //On détruit notre session 

    session_destroy();
    header('location:index.php');

    ?>
</body>

</html>