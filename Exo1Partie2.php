
<?php

Function Tableau () {

 echo "<table border><td>Bonjour</td></table>";

}

highlight_file(__FILE__);

?>

<html>

<head><title>Exercice 1 Partie 2</title></head>

<body>

<div class="hautdepage">
    <?php Tableau (); ?>
</div>

<div class="basdepage">
    <?php Tableau (); ?>
</div>

<a href="index.html">Acceuil</a>

</body>

</html>