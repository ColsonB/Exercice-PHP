
<?php   
   session_start();
   
   if (isset($_POST['Nom'])){
    echo $_POST['Nom'];
   }
   if (isset($_POST['Prénom'])){
    echo $_POST['Prénom'];
   }

   highlight_file(__FILE__);
   
?>

<html>

<head><title>Exercice 8</title></head>

<body>

<form method="POST">

    <input type="text" id="name" name="Nom">
    <input type="text" id="name" name="Prénom">
    <input type="submit" id="value" value="Cliquer">
    <input type="submit" id="Supprimer la session" value="Supprimer la session">

<a href="index.html">Acceuil</a>

</body>

</html>