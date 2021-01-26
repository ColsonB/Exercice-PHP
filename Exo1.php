
<?php

$NombreAléatoire = rand (0, 100);

if ($NombreAléatoire%2 == 1) { 
    echo "<div id=Impaire>$NombreAléatoire</div>"; // Impaire
}
else {
    echo "<div id=Paire>$NombreAléatoire</div>"; // Paire
}

highlight_file(__FILE__);

?>

<html>

    <head>
        <title>Exercie 1</title>
    </head>

        <link rel="stylesheet" type="text/css" href="CSSPHPPartie1.css">

    <body>
        <a href="index.html">Acceuil</a>
    </body>

</html>