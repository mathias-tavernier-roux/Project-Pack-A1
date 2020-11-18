<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack 2 Jour 3 Job O1</title>
</head>
<body>
    <main>
    <?php 
    $str="Les choses que l'on possede finissent par nous posseder."; // Phrase Demandé
    $strsp = str_split($str); // Coupe La Phrase Par Tranche de 1 Caractere et Les Met Dans un Tableau
    $numero = count($strsp) - 1;
    while ($numero >= 0) // Boucle Pour Ecrire Le Mot A L'Envers
    {
    echo $strsp[$numero]; // Affichage du Caractere Actuel
    $numero = $numero -1;
    }
    ?>
    </main>
</body>
</html>