<html>

<head></head>


<body>

<?php

$A;
$B;
$C;
$Delta = ($B*$B)-4*$A*$C;

if ($Delta > 0) {

    echo "L'équation a 2 solution réelles";
    echo "-$B - sqrt ($Delta) / 2*$A ";
}

if ($Delta = 0) {

    echo "L'équation a une solution réelles";
    echo "-$B / 2*$A";
    
}

if ($Delta < 0 ) {

    echo "L'équation n'a pas de solutions réelles";
}

?>

</body>

</html>