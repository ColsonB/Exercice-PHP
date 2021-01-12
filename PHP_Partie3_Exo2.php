<?php
    include "personnage.php";
    $Vie1 = new Personnage(100);
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    <?php
        $Vie1->afficheVie();
    ?>
</body>
</html>