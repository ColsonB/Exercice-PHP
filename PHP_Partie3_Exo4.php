<?php
    include "personnage.php";
    $BDD = new PDO ('mysql:host=192.168.64.106;dbname=Exo5_Objet_Colson', 'colson', 'colson');
    $p1 = new Personnage(1, $pdo);
    $p2 = new Personnage(2, $pdo);
    
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
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