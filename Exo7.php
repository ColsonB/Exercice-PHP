<html>

<head></head>

<body>

<form method="GET">
    <input type="text" id="name" name="Nom">
    <input type="text" id="name" name="Prénom">
    <input type="submit" id="value" value="Cliquer">

<?php   
   session_start();
   if (isset($_SESSION['Nom'])){
   $_SESSION['Nom']=$value;
   }
   if (isset($_SESSION['Prénom'])){
   $_SESSION['Prénom']=$value;
   }

   highlight_file(__FILE__);

?>

<a href="index.html">Acceuil</a>

</body> 

</html>