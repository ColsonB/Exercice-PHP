
<?php

    Function Tableau ($Nom, $Prénom, $Age){

        echo "<table border>
        <tr><td>$Nom</td><td>$Prénom</td><td>$Age</td></tr>
        </table>";
    }

    highlight_file(__FILE__);
?>

<html>

<head><title>Exercice 2 Partie 2</title></head>

<body>

<div>

    <?php 

    $Nom="Colson";
    $Prénom="Baptiste";
    $Age="18";
    Tableau ($Nom, $Prénom, $Age); 
    
    ?>

</div>

<a href="index.html">Acceuil</a>

</body>

</html>