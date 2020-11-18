<?php
$db = mysqli_connect ("localhost", "root", "", "jour 8");
$requete = "SELECT nom , superficie FROM etage";
$query = mysqli_query ($db, $requete);
$resultats = mysqli_fetch_all ($query);
// echo  $requete;
// var_dump ($resultats);
$MAX = count($resultats);
$MAX = $MAX - 1;
?>
<html>
    <table border="1">
    <thead>
    <tr>
<?php
$limit = (strpos($requete, "FROM"));
$word = "*";
if (strpos($requete, $word) !== FALSE) 
    {
    echo "<td>id</td>";
    echo "<td>nom</td>";
    echo "<td>etage</td>";
    echo "<td>superficie</td>";
    goto end;
    }
$word = "id";
if (strpos($requete, $word) !== FALSE) 
    {
    if (strpos($requete, $word) <= $limit) 
    {
    echo "<td>id</td>";
    }
}
$word = " nom";
if (strpos($requete, $word) !== FALSE) 
    {
    if (strpos($requete, $word) <= $limit) 
    {
    echo "<td>nom</td>";
    }
}
$word = "numero";
if (strpos($requete, $word) !== FALSE) 
    {
    if (strpos($requete, $word) <= $limit) 
    {
    echo "<td>numero</td>";
    }
}
$word = "superficie";
if (strpos($requete, $word) !== FALSE) 
    {
    if (strpos($requete, $word) <= $limit) 
    {
    echo "<td>superficie</td>";
    }
}
end:
?>
</tr>
</thead>
<tbody>
    <?php
    $VNumber = 0;
    $total = 0;
    for ($number; $VNumber <= $MAX; $VNumber + 1)
    {
        echo "<tr>";
        $number = 0;
        $data = 0;
        for ($number; isset($resultats[$VNumber][$number]); $number++)
        {
        echo "<td>";
        $data =(int)$resultats[$VNumber][$number];
        $total = $total + $data;
        echo $resultats[$VNumber][$number];
        echo "</td>";
        }
        echo "</tr>";
        $VNumber = $VNumber + 1;
    }
    ?>
</tbody>
</table>
<?php echo "Superficie Totale = $total" ?>