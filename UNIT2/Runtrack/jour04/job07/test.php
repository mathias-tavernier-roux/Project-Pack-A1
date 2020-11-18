<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
    *
    {
    line-height: 1
    }
    </style>
</head>
<body>
<?php
echo "<center>/\</br>";
for ($hauteur = $_POST['hauteur']; $hauteur > 0 ; $hauteur--)
{
    $largeur = $_POST['hauteur'];
    $largeur = $largeur - $hauteur;
echo "/";
    for ($wcenter = 0; $wcenter <= $largeur; $wcenter++)
    {
        echo "_";
    }
echo "\ " ;
echo "</br>";
}
for ($hauteur = $_POST['hauteur'] - 1; $hauteur > 0 ; $hauteur--)
{
    $largeur = $_POST['hauteur'];
    $largeur = $largeur * 2;
echo "|&#160;";

    for ($wcenter = 0; $wcenter <= $largeur; $wcenter++)
    {
        echo "&#160;";
    }
echo "|" ;
echo "</br>";
}
echo "|_";
$largeur = $_POST['hauteur'];
$largeur = $largeur - 1;
for ($wcenter = 0; $wcenter <= $largeur; $wcenter++)
    {
        echo "_";
    }
echo "|" ;
echo "</br>";
?>
</body>
</html>