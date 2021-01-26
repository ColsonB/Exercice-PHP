
<?php
        $Tableau[0] = array ("Nom" => "Colson", "Prénom" => "Baptiste", "MDP" => "0000");
        $Tableau[1] = array ("Nom" => "Pesant", "Prénom" => "Valentin", "MDP" => "0000");
        $Tableau[2] = array ("Nom" => "Cauet",  "Prénom" =>  "Clément", "MDP" => "0000");
        
        echo "<table>";

        for ($i = 0; $i <3; $i++) {
            
    
            echo "<tr></tr>";
            
        
        foreach ($Tableau[$i] as $value) {
            
            echo "<td>";
            echo "$value";
        }
    }
       echo "</table>";

    highlight_file(__FILE__);

    ?>

<html>
    
    <head>
        <title>Exercice 3</title>
    </head>

    <body>
        <a href="index.html">Acceuil</a>
    </body>

</html>