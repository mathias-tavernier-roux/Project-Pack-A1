<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack 2 Jour 5 Job 1</title>
</head>
<body>
    <?php 
    function occurence($str)
    {
        $strsp = str_split($str); // Coupe La Phrase Par Tranche de 1 Caractere et Les Met Dans un Tableau
        $numero = 0;
        $charcount = 0;
        while (isset ($strsp[$numero])) // Boucle Pour Ecrire Le Mot A L'Envers
        {
            if ($strsp[$numero] == "c" AND isset ($strsp[$numero + 1]))
            {
                $numero = $numero + 1;
                if ($strsp[$numero] == "h" AND isset ($strsp[$numero + 1]))
                {
                    $numero = $numero + 1;
                    if ($strsp[$numero] == "a" AND isset ($strsp[$numero + 1]))
                    {
                        $numero = $numero + 1;
                        if ($strsp[$numero] == "r")
                        {
                        $charcount = $charcount + 1;
                        }
                    }
                }
            }
        if (isset ($strsp[$numero + 1]) == false)
        {
                return $charcount;
        }
        else 
        {
                $numero = $numero + 1;
        }
        }  
    }
    $str = "charcharchar";
    echo occurence($str);
    ?>
</body>
</html>