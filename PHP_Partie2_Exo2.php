<?php

include "../../Menu.php";
Menu();

    Function Tableau ($Nom, $Prénom, $Age){

        echo "<table border>
        <tr><td>$Nom</td><td>$Prénom</td><td>$Age</td></tr>
        </table>";
    }

    highlight_file(__FILE__);
?>

<html>

<head>
    <title>Exercice 2 Partie 2</title>
    <link rel='stylesheet' type='text/css' href='../../Menu.css'>
</head>

<body>

    <?php 

    $Nom="Colson";
    $Prénom="Baptiste";
    $Age="18";
    Tableau ($Nom, $Prénom, $Age); 
    
    ?>

<a href="index.html">Acceuil</a>

</body>

</html>