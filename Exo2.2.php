<html>

<head></head>
<body>

<?php

$Tableau = array ( 
    "Nom" => "Colson",
    "Prénom" => "Baptiste",
    "MDP" => "0000",
);




echo "<table><tr>";
echo "<td>".$Tableau["Nom"]."</td>";
echo "<td>".$Tableau["Prénom"]."</td>";
echo "<td>".$Tableau["MDP"]."</td>";
echo "</tr></table>";

highlight_file(__FILE__);


?>

<a href="index.html">Acceuil</a>

</body>






</html>
