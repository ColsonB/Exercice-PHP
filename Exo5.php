<html>

<head></head>

<body>

<form action ="" method="POST">
    <input type="text" name="nom">
    <input type="submit" value="Cliquer">
</form>

<?php  
if(isset($_POST['nom'])){
    echo $_POST['nom'];
}

highlight_file(__FILE__);

?>

</body> 




</html>