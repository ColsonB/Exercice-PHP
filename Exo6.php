
<?php
if(isset($_GET['Nom'])){
    echo "Votre nom est : " .$_GET['Nom'];
}

highlight_file(__FILE__);

?>

<html>

<head><title>Exercice 6</title></head>

<body>

<form method="GET">
    <input type="text" id="name" name="Nom">
    <input type="submit" value="Cliquer">
</form>

<a href="index.html">Acceuil</a>

</body>

</html>