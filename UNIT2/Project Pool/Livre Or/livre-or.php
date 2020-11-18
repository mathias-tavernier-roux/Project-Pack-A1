<?php
session_start();
$db = mysqli_connect ("localhost", "root", "", "livreor");
$requete = "SELECT `date`, `id_utilisateur`, `commentaire` FROM `commentaires`";
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
		<div class="sucess">
		<h1>Bienvenue Sur Mon Livre D'Or <?php echo $_SESSION['username']; ?> !</h1>
            <h3>Ce Dernier Vous Permet de</h3>
            <h3>- Laisser Votre Avis Sur Les Differentes Pages Web Que J'ai Crée Pendant Ma Formation</h3>
            <h3>- Voir Les Avis des Autres</h3>
            <h3>Avant de Poster Un Avis Gardez A L'Esprit que Je Suis Encore Etudiant Dans Le Domaine et que Je Peut Faire des Erreurs</h3>
            <?php
            if($_SESSION['username'] == "Anonymous")
            {
            echo '<p>Vous devez Etre Connecté pour Ecrire Un Commentaire</p>';
            echo "<a href='login.php' class='C-Button'>Se Connecter</a>";
            }
            else
            {
            echo "<a href='commentaire.php' class='C-Button'>Poster Un Commentaire</a>";
            }
            ?>
<table>
    <thead>
    <td>Jour</td>
    <td>Utilisateur</td>
    <td>Projet Concerné</td>
    <td>Commentaire</td>
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