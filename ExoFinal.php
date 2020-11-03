<html>

<head></head>

<body>

    <form method="POST">
    
        <label for="login">Login</label>
        <input type="text" id="name" name="login" >
        <label for="motdepasse">Mot de Passe</label>
        <input type="text" id="name" name="motdepasse" >
        <input type="submit" id="value" value="Cliquer">

    <?php 
   
    if ($_POST['login'] == "Baptiste" && $_POST['motdepasse'] == 1234) {
       echo "Bienvenue";
    }
    else {
    echo "Login ou Mot de passe incorrect";
    }
   
    highlight_file(__FILE__);

    ?>

<a href="index.html">Acceuil</a>

</body>



</html>