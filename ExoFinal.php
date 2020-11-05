<?php 

    session_start();

    if (isset($_GET['login']) == "Baptiste" && isset($_GET['motdepasse']) == 1234) {
    echo "Bienvenue";
    }

    else {
    echo "Login ou Mot de passe incorrect";
    }
   
    highlight_file(__FILE__);

    ?>


<html>

<head><title>Exercice Final</title></head>

<body>

    <form method="GET">
    
        <label for="login">Login</label>
        <input type="text" id="name" name="login" >
        <label for="motdepasse">Mot de Passe</label>
        <input type="text" id="name" name="motdepasse" >
        <input type="submit" id="value" value="Cliquer">

<a href="index.html">Acceuil</a>

</body>

</html>