<?php
$db = mysqli_connect ("localhost", "root", "", "moduleconnexion");
$requete = "SELECT `login`, `nom`, `prenom` FROM `utilisateurs` ORDER BY `id` DESC";
$query = mysqli_query ($db, $requete);
$resultats = mysqli_fetch_all ($query);
// echo  $requete;
//var_dump ($resultats);
$MAX = count($resultats);
$MAX = $MAX - 1
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="style.css" />
	</head>
	<body>
<table>
    <thead>
    <td>Login</td>
    <td>Nom</td>
    <td>Prenom</td>
    </thead>
    <tbody>
    <?php
    $VNumber = $MAX;
    for ($number; $VNumber >= 0; $VNumber - 1)
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
        $VNumber = $VNumber - 1;
    }
    ?>
    </tbody>
</table>

    </body>
</html>