<html>

<head>

</head>

<link rel="stylesheet" type="text/css" href="CSS PHP Partie 1.css">

<body>


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


</body>

</html>