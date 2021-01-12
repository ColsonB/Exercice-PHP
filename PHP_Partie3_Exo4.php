<?php
    include "personnage.php";
    $p1 = new Personnage(100,"Batman",30);
    $p2 = new Personnage(100,"Cleme",10);
    
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
    <?php
        $p1->affiche();
        $p2->affiche();

        $p2->attaque($p1);
        $p2->défense($p1);
        $p1->attaque($p2);
     

        $p1->affichePV();
        $p2->affichePV();
    ?>
</body>
</html>