<html>

<head></head>

<body>

<form method="GET">
    <input type="text" id="name" name="Nom">
    <input type="submit" value="Cliquer">
</form>

<?php
if(isset($_GET['Nom'])){
    echo "Votre nom est : " .$_GET['Nom'];
}

highlight_file(__FILE__);

?>




</body>





</html>