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
        if($i % 3 == 0 && $i % 5 == 0)
        {
            echo "FizzBuzz</br>";
        }
        else
        {
            if($i % 3 == 0)
        {
            echo "Fizz</br>";
        }
        else
        if($i % 5 == 0)
        {
            echo "Buzz</br>";
        }
        else
        {
            echo "$i</br>";
        }
        }         
    };
    ?>
    </main>
</body>
</html>