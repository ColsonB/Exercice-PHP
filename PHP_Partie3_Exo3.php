<?php
    include "personnage.php";
    $p1 = new Personnage(100,"Batman");
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
    ?>
</body>
</html>