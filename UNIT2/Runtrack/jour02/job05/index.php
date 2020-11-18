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
   $n=1000;

   echo "2<br>";
   for($i=2;$i<$n;$i++)
   {
       for($j=2;$j<$i;$j++)
       {
           if(($i%$j)==0) break;
           if($j==($i-1)) echo "$i<br>"; 
       }
   }
    ?>
    </main>
</body>
</html>