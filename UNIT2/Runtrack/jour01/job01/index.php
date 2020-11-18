<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack 2 : Jour 01 Job 01</title>
</head>
<body>
    <h1>Premier Tiret : Ecrire "Vive LaPlateforme avec 3 Variable concaténantes</h1>
    <?php 
    $str = ("LaPlateforme");
    $str2 = ("Vive");
    $str3 = ("!");
    echo "<h2>$str2 $str $str3</h2>";
    ?>
    <h1>Deuxieme Tiret : Tester les Variable de Calcul</h1>
    <?php 
    $val = 6;
    echo "<h2>$val</h2>";
    $val = $val + 4;
    echo "<h2>$val</h2>";
    ?>
    <h1>Troisieme Tiret : Tester les Variable Boolean (True / False)</h1>
    <?php 
    $myBool = true;
    if ($myBool == true)
    {
        echo "<h2>TRUE</h2>";
    }
        else
    {
        echo "<h2>FALSE</h2>";
    }
    $myBool = false;
    if ($myBool == true)
    {
        echo "<h2>TRUE</h2>";
    }
        else
    {
        echo "<h2>FALSE</h2>";
    }
    ?>
</body>
</html>