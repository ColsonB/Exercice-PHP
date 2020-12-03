<?php 

include "../../Menu.php";
Menu();

    include("Formulaire.php");

?>
<!DOCTYPE html>
<html>
<head>
    <link rel='stylesheet' type='text/css' href='../../Menu.css'>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
    <h1>Exercice Final Partie 2<h1>
    
    <?php

        $MotDepass = "1234";
        
        if (afficheFormulaire($MotDepass) == "OK"){ 
            ?>
                <a href="http://google.com"> Google </a>
            <?php
        }
    ?>

    </body>
</html>
        