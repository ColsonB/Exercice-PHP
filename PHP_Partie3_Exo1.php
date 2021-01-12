<?php
    include "user.php";
    $User1 = new user();
    
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="PHP_Partie3_Exo1.css" rel="stylesheet" type="text/css">
    <title>Exercice 1</title>
</head>
<body>
    <?php
    $User1->afficheUser();
    ?>  
    <div>
       <table>
        <tr>
            <th>User</th>
        </tr>
        <tr>
            <td>
                <p>-Nom : String</p>
                <p>-Prénom : String</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>+AfficheUser() : void</p>
            </td>
        </tr>
       </table>
    </div>
</body>
</html>