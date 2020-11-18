<?php
if (isset($_COOKIE['nbvisite']))
{
setcookie('nbvisite' , $_COOKIE['nbvisite'] + 1);
}
else
{
setcookie('nbvisite' , 1);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo $_COOKIE['nbvisite'];
?>
<form action="reset.php" method="post">
<input type="submit" value="Reset" />
</form>

</body>
</html>