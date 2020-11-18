<?php
$db = mysqli_connect ("localhost", "root", "", "jour 8");
$requete = "SELECT * FROM etudiants";
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
        echo "<td>prenom</td>";
        echo "<td>nom</td>";
        echo "<td>naissance</td>";
        echo "<td>sexe</td>";
        echo "<td>email</td>";
        goto end;
        }
    $word = "Id";
    if (strpos($requete, $word) !== FALSE) 
        {
        if (strpos($requete, $word) <= $limit) 
        {
        echo "<td>id</td>";
        }
    }
    $word = "Prenom";
    if (strpos($requete, $word) !== FALSE) 
        {
        if (strpos($requete, $word) <= $limit) 
        {
        echo "<td>prenom</td>";
        }
    }
    $word = "Nom";
    if (strpos($requete, $word) !== FALSE) 
        {
        if (strpos($requete, $word) <= $limit) 
        {
        echo "<td>nom</td>";
        }
    }
    $word = "Naissance";
    if (strpos($requete, $word) !== FALSE) 
        {
        if (strpos($requete, $word) <= $limit) 
        {
        echo "<td>naissance</td>";
        }
    }
    $word = "Sexe";
    if (strpos($requete, $word) !== FALSE) 
        {
        if (strpos($requete, $word) <= $limit) 
        {
        echo "<td>sexe</td>";
        }
    }
    $word = "Email";
    if (strpos($requete, $word) !== FALSE) 
        {
        if (strpos($requete, $word) <= $limit) 
        {
        echo "<td>email</td>";
        }
    }
end:
?>
    </tr>
    </thead>
    <tbody>
    <?php
    $VNumber = 0;
    for ($number; $VNumber <= $MAX; $VNumber + 1)
    {
        echo "<tr>";
        $number = 0;
        for ($number; isset($resultats[$VNumber][$number]); $number++)
        {
        echo "<td>";
        echo $resultats[$VNumber][$number];
        echo "</td>";
        }
        echo "</tr>";
        $VNumber = $VNumber + 1;
    }
    ?>
    </tbody>
    </table>