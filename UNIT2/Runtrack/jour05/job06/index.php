<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $str = "MY NAME IS ZERODAY";
    function leetspeak($str)
    {
    $strsp = str_split($str); // Coupe La Phrase Par Tranche de 1 Caractere et Les Met Dans un Tableau
        $numero = 0;
        while (isset ($strsp[$numero])) // Boucle Pour Ecrire Le Mot A L'Envers
        {
        if ($strsp[$numero] == "a" OR $strsp[$numero] == "A"){echo "@";}
        if ($strsp[$numero] == "b" OR $strsp[$numero] == "B"){echo "/3";}
        if ($strsp[$numero] == "c" OR $strsp[$numero] == "C"){echo "<";}
        if ($strsp[$numero] == "d" OR $strsp[$numero] == "D"){echo ")";}
        if ($strsp[$numero] == "e" OR $strsp[$numero] == "E"){echo "3";}
        if ($strsp[$numero] == "f" OR $strsp[$numero] == "F"){echo "ƒ";}
        if ($strsp[$numero] == "g" OR $strsp[$numero] == "G"){echo "&";}
        if ($strsp[$numero] == "h" OR $strsp[$numero] == "H"){echo "#";}
        if ($strsp[$numero] == "i" OR $strsp[$numero] == "I"){echo "!";}
        if ($strsp[$numero] == "j" OR $strsp[$numero] == "J"){echo "</";}
        if ($strsp[$numero] == "k" OR $strsp[$numero] == "K"){echo "|<";}
        if ($strsp[$numero] == "l" OR $strsp[$numero] == "L"){echo "|_";}
        if ($strsp[$numero] == "m" OR $strsp[$numero] == "M"){echo "|\/|";}
        if ($strsp[$numero] == "n" OR $strsp[$numero] == "N"){echo "/\/";}
        if ($strsp[$numero] == "o" OR $strsp[$numero] == "O"){echo "¤";}
        if ($strsp[$numero] == "p" OR $strsp[$numero] == "P"){echo "|*";}
        if ($strsp[$numero] == "r" OR $strsp[$numero] == "Q"){echo "<|";}
        if ($strsp[$numero] == "r" OR $strsp[$numero] == "R"){echo "Я";}
        if ($strsp[$numero] == "s" OR $strsp[$numero] == "S"){echo "$";}
        if ($strsp[$numero] == "t" OR $strsp[$numero] == "T"){echo "|-";}
        if ($strsp[$numero] == "u" OR $strsp[$numero] == "U"){echo "(_)";}
        if ($strsp[$numero] == "v" OR $strsp[$numero] == "V"){echo "\/";}
        if ($strsp[$numero] == "w" OR $strsp[$numero] == "W"){echo "\^/";}
        if ($strsp[$numero] == "x" OR $strsp[$numero] == "X"){echo "><";}
        if ($strsp[$numero] == "y" OR $strsp[$numero] == "Y"){echo "λ";}
        if ($strsp[$numero] == "z" OR $strsp[$numero] == "Z"){echo "%";}
        if ($strsp[$numero] == "-" OR $strsp[$numero] == "_"){echo "-";}
        if ($strsp[$numero] == " " OR $strsp[$numero] == ""){echo " ";}
        $numero = $numero + 1;
        }
    }
        leetspeak($str)

    ?>
</body>
</html>