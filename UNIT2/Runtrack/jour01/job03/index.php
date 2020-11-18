<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$var1 = true;
$var2 = false;
$var3 = "Bienvenue";
$var4 = "Bienvenue Sur Le Site";
$var5 = 10;
$var6 = -10;
$var7 = 10.52;
$var8 = NULL;
$var9 = true;
$var10 = "Mathias";
?>
    <header>
    <style type="text/css">
.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>
<main>
<table class="tftable" border="1">
<tr>
<th>
<?php
echo "<h3>Type</h3>";
?>
</th>
<th>
<?php
echo "<h3>Name</h3>";
?>
</th>
<th>
<?php
echo "<h3>Value</h3>";
?>
</th>
</tr>
<tr>
<th>
<?php
$var = $var1;
echo gettype ($var)
?>
</th>
<th>
<?php
$type = gettype($var);
if ($type == "boolean")
{
    echo "Etat";
}
if ($type == "integer")
{
    echo "Nombre Entier";
}
if ($type == "double")
{
    echo "Nombre Décimal";
}
if ($type == "string")
{
    echo "Groupe de Mots";
}
if ($type == "NULL")
{
    echo "Vide";
}
?>
</th>
<th>
<?php
if ($type == "boolean")
{
    if ($var == true)
    {
        echo "true";
    }
    if ($var == false)
    {
        echo "false";
    }
}
else
{
    echo "$var";
}
?>
</th>
</tr>
<tr>
<th>
<?php
$var = $var2;
echo gettype ($var)
?>
</th>
<th>
<?php
$type = gettype($var);
if ($type == "boolean")
{
    echo "Etat";
}
if ($type == "integer")
{
    echo "Nombre Entier";
}
if ($type == "double")
{
    echo "Nombre Décimal";
}
if ($type == "string")
{
    echo "Groupe de Mots";
}
if ($type == "NULL")
{
    echo "Vide";
}
?>
</th>
<th>
<?php
if ($type == "boolean")
{
    if ($var == true)
    {
        echo "true";
    }
    if ($var == false)
    {
        echo "false";
    }
}
else
{
    echo "$var";
}
?>
</th>
</tr>
<tr>
<th>
<?php
$var = $var3;
echo gettype ($var)
?>
</th>
<th>
<?php
$type = gettype($var);
if ($type == "boolean")
{
    echo "Etat";
}
if ($type == "integer")
{
    echo "Nombre Entier";
}
if ($type == "double")
{
    echo "Nombre Décimal";
}
if ($type == "string")
{
    echo "Groupe de Mots";
}
if ($type == "NULL")
{
    echo "Vide";
}
?>
</th>
<th>
<?php
if ($type == "boolean")
{
    if ($var == true)
    {
        echo "true";
    }
    if ($var == false)
    {
        echo "false";
    }
}
else
{
    echo "$var";
}
?>
</th>
</tr>
<tr>
<th>
<?php
$var = $var4;
echo gettype ($var)
?>
</th>
<th>
<?php
$type = gettype($var);
if ($type == "boolean")
{
    echo "Etat";
}
if ($type == "integer")
{
    echo "Nombre Entier";
}
if ($type == "double")
{
    echo "Nombre Décimal";
}
if ($type == "string")
{
    echo "Groupe de Mots";
}
if ($type == "NULL")
{
    echo "Vide";
}
?>
</th>
<th>
<?php
if ($type == "boolean")
{
    if ($var == true)
    {
        echo "true";
    }
    if ($var == false)
    {
        echo "false";
    }
}
else
{
    echo "$var";
}
?>
</th>
</tr>
<tr>
<th>
<?php
$var = $var5;
echo gettype ($var)
?>
</th>
<th>
<?php
$type = gettype($var);
if ($type == "boolean")
{
    echo "Etat";
}
if ($type == "integer")
{
    echo "Nombre Entier";
}
if ($type == "double")
{
    echo "Nombre Décimal";
}
if ($type == "string")
{
    echo "Groupe de Mots";
}
if ($type == "NULL")
{
    echo "Vide";
}
?>
</th>
<th>
<?php
if ($type == "boolean")
{
    if ($var == true)
    {
        echo "true";
    }
    if ($var == false)
    {
        echo "false";
    }
}
else
{
    echo "$var";
}
?>
</th>
</tr>
<tr>
<th>
<?php
$var = $var6;
echo gettype ($var)
?>
</th>
<th>
<?php
$type = gettype($var);
if ($type == "boolean")
{
    echo "Etat";
}
if ($type == "integer")
{
    echo "Nombre Entier";
}
if ($type == "double")
{
    echo "Nombre Décimal";
}
if ($type == "string")
{
    echo "Groupe de Mots";
}
if ($type == "NULL")
{
    echo "Vide";
}
?>
</th>
<th>
<?php
if ($type == "boolean")
{
    if ($var == true)
    {
        echo "true";
    }
    if ($var == false)
    {
        echo "false";
    }
}
else
{
    echo "$var";
}
?>
</th>
</tr>
<tr>
<th>
<?php
$var = $var7;
echo gettype ($var)
?>
</th>
<th>
<?php
$type = gettype($var);
if ($type == "boolean")
{
    echo "Etat";
}
if ($type == "integer")
{
    echo "Nombre Entier";
}
if ($type == "double")
{
    echo "Nombre Décimal";
}
if ($type == "string")
{
    echo "Groupe de Mots";
}
if ($type == "NULL")
{
    echo "Vide";
}
?>
</th>
<th>
<?php
if ($type == "boolean")
{
    if ($var == true)
    {
        echo "true";
    }
    if ($var == false)
    {
        echo "false";
    }
}
else
{
    echo "$var";
}
?>
</th>
</tr>
<tr>
<th>
<?php
$var = $var8;
echo gettype ($var)
?>
</th>
<th>
<?php
$type = gettype($var);
if ($type == "boolean")
{
    echo "Etat";
}
if ($type == "integer")
{
    echo "Nombre Entier";
}
if ($type == "double")
{
    echo "Nombre Décimal";
}
if ($type == "string")
{
    echo "Groupe de Mots";
}
if ($type == "NULL")
{
    echo "Vide";
}
?>
</th>
<th>
<?php
if ($type == "boolean")
{
    if ($var == true)
    {
        echo "true";
    }
    if ($var == false)
    {
        echo "false";
    }
}
else
{
    echo "$var";
}
?>
</th>
</tr>
<tr>
<th>
<?php
$var = $var9;
echo gettype ($var)
?>
</th>
<th>
<?php
$type = gettype($var);
if ($type == "boolean")
{
    echo "Etat";
}
if ($type == "integer")
{
    echo "Nombre Entier";
}
if ($type == "double")
{
    echo "Nombre Décimal";
}
if ($type == "string")
{
    echo "Groupe de Mots";
}
if ($type == "NULL")
{
    echo "Vide";
}
?>
</th>
<th>
<?php
if ($type == "boolean")
{
    if ($var == true)
    {
        echo "true";
    }
    if ($var == false)
    {
        echo "false";
    }
}
else
{
    echo "$var";
}
?>
</th>
</tr>
<tr>
<th>
<?php
$var = $var10;
echo gettype ($var)
?>
</th>
<th>
<?php
$type = gettype($var);
if ($type == "boolean")
{
    echo "Etat";
}
if ($type == "integer")
{
    echo "Nombre Entier";
}
if ($type == "double")
{
    echo "Nombre Décimal";
}
if ($type == "string")
{
    echo "Groupe de Mots";
}
if ($type == "NULL")
{
    echo "Vide";
}
?>
</th>
<th>
<?php
if ($type == "boolean")
{
    if ($var == true)
    {
        echo "true";
    }
    if ($var == false)
    {
        echo "false";
    }
}
else
{
    echo "$var";
}
?>
</th>
</tr>
</table>
    </main>
</body>
</html>