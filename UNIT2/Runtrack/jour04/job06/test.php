<?php
$nombre = $_POST['number'];
if ($_POST['number']%2 == 1)
echo "$nombre est impair";
else
echo "$nombre est pair";