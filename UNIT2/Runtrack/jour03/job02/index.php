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
   $str="Tous ces instants seront perdus dans le temps comme les larmes sous la pluie."; // Phrase Demandé
   $strsp = str_split($str); // Coupe La Phrase Par Tranche de 1 Caractere et Les Met Dans un Tableau
   for ($numero = 0; $numero < 76; $numero ++) // Boucle Pour Ecrire 1 Mot / 2 en Partant de la Premiere Lettre
   {
        echo $strsp[$numero]; // Affichage du Caractere Actuel
        $numero ++; // Faire en Sorte que Ce Soit Un Caractere Sur 2 (A Partir du Premier Caractere)
   }
    ?>
    </main>
</body>
</html>