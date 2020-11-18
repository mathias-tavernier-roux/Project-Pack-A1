<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runtrack 2 Jour 2 Job O2</title>
</head>
<body>
    <main>
    <?php 
    for ($i=1; $i<100; $i++) {
        
        if ($i >= 0 && $i <= 20)
        {
            echo "<i>$i</i> <br />";
        }
        if ($i >= 25 && $i <= 50)
        {
            if ($i == 42)
        {
            echo "La Plateforme_ <br />";
        }
        else
        {
            echo "<u>$i</u> <br />";
        }
        }
        if ( $i > 50)
        {
            echo "$i <br />";
        }       
    };
    ?>
    </main>
</body>
</html>