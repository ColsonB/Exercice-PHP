
<?php  
if(isset($_POST['nom'])){
    echo $_POST['nom'];
}

highlight_file(__FILE__);

?>

<html>

    <head>
        <title>Exercice 5</title>
    </head>

    <body>

        <form action ="" method="POST">
            <input type="text" name="nom">
            <input type="submit" value="Cliquer">
        </form>

    <a href="index.html">Acceuil</a>
    
    </body> 

</html>