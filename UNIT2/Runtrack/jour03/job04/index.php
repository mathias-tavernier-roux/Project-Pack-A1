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
    $str="Dans l'espace, personne ne vous entend crier."; //La Phrase donnée
    $strsp = str_split($str); // Coupe La Phrase Par Tranche de 1 Caractere et Les Met Dans un Tableau
    $number = count($strsp); // Compte L'Array
    echo "<br/><b>Il y a ".$number." caractères au total.</b>" //Donne le nombre total de caractère
    ?>
    </main>
</body>
</html>