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
    $voyelle = array("a","e","i","o","u","y","A","E","I","O","U","Y"); // Tableau de Données Listant Les Voyelles
    $str = "I'm sorry Dave I'm afraid I can't do that"; // Phrase Demandé
    $strsp = str_split($str); // Coupe La Phrase Par Tranche de 1 Caractere et Les Met Dans un Tableau
    for ($numero = 0; $numero < 41; $numero ++) // Boucle Pour Ecrire 1 Mot / 2 en Partant de la Premiere Lettre
    {
        
        for ($substats = 0; $substats <= 11; $substats ++) // Boucle Pour Tester Avec Chaque Voyelle
        if ($strsp[$numero] == $voyelle[$substats]) // Test Du Caractere Actuel Avec Une Des Voyelle de $Voyelle
        echo $strsp[$numero]; // Affichage du Caractere Actuel Si C'est Une Voyelle
    }
    ?>
    </main>
</body>
</html>