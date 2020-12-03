<?php

include "../../Menu.php";
Menu();

Function Tableau ($val1, $val2, $val3, $moyenne) {

    echo "<table border>
    <tr><td>Note</td></tr>
    <tr><td>$val1</td></tr>
    <tr><td>$val2</td></tr>
    <tr><td>$val3</td></tr>
    <tr><td>$moyenne</td></tr>
    </table>";

}

highlight_file(__FILE__);

?>

<html>

<head>
    <title>Exercice 3</title>
    <link rel='stylesheet' type='text/css' href='../../Menu.css'>
</head>

<body>

    <?php

    $val1="18";
    $val2="15";
    $val3="13";
    $moyenne = $val1+$val2+$val3/3;
    Tableau($val1, $val2, $val3, $moyenne);

    ?>

</body>

</html>