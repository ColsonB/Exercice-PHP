<?php
include "personnage.php";
try{
    $pdo= new PDO ('mysql:host=192.168.64.106;dbname=Exo5_Objet_Colson', 'colson', 'colson');
    $p1 = new Personnage(1, $pdo);
    $p2 = new Personnage(2, $pdo);
    $p3 = new Personnage(3, $pdo);
}
catch(Exception $e){
    die('Erreur : ' . $e->getMessage());
} 
?>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercice 6</title>
    </head>
    <body>
        <?php
            $p1->affiche();
            $p2->affiche();
            $p3->affiche();

            $p1->attaque($p3);
            $p3->attaque($p2);

            $p1->affichePV();
            $p2->affichePV();
            $p3->affichePV();

            $p1->Soin();
        ?>
    </body>
</html>