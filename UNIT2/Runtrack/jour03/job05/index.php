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
    $voy = 0;
    $oth = 0;
    $voyelle = array("a","e","i","o","u","é","y","A","E","I","O","U","Y"); // Tableau de Données Listant Les Voyelles
    $str = "On n'est pas le meilleur quand on le croit mais quand on le sait"; // Phrase Demandé
    $strsp = str_split($str); // Coupe La Phrase Par Tranche de 1 Caractere et Les Met Dans un Tableau
    for ($numero = 0; $numero < count($voyelle); $numero ++) // Boucle Pour Ecrire 1 Mot / 2 en Partant de la Premiere Lettre
    {
        
        for ($substats = 0; $substats <= 11; $substats ++) // Boucle Pour Tester Avec Chaque Voyelle
        if ($strsp[$numero] == $voyelle[$substats]) // Test Du Caractere Actuel Avec Une Des Voyelle de $Voyelle
        $voy = $voy + 1; // Affichage de 1 a Voyelle
    }
    $oth = count($strsp)-$voy;
    echo "<table><tr><th>Voyelles</th><th>Consonnes</th></tr><tr><td>".$voy."</td><td>".$oth."</td></tr></table>"
    ?>
    </main>
</body>
</html>