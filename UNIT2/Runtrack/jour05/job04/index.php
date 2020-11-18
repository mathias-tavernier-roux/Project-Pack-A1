<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack 2 Jour 5 Job 1</title>
</head>
<body>
    <?php 
    function calcule($a , $operation , $b)
    {
        if ($operation == "+")
        {
        $result = $a + $b;
        }
        if ($operation == "-")
        {
        $result = $a - $b;
        }
        if ($operation == "*")
        {
        $result = $a * $b;
        }
        if ($operation == "/")
        {
        $result = $a / $b;
        }
        if ($operation == "%")
        {
        $result = $a % $b;
        }
        return $result;
    }
    $a = 12;
    $b = 2;
    $operation = "+";
    echo calcule($a , $operation , $b);
    ?>
</body>
</html>