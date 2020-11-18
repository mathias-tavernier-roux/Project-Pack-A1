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
   $number = array(200, 204, 173, 98, 171, 404, 159);
   foreach($number as $valeur)
    {
        if ($valeur%2==0)
        echo $valeur." Est Pair <br />";
        else
        echo $valeur." Est Impair <br />";
    }
    ?>
    </main>
</body>
</html>