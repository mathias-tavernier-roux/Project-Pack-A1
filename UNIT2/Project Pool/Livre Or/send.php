<?php
// Initialiser la session
session_start();
    $avis = $_POST['avis'];
    $user = $_SESSION['username'];
    $projet = $_POST['projet'];
    $db = mysqli_connect("localhost", "root", "", "livreor");
    $requete = "INSERT into `commentaires`(`commentaire`, `id_utilisateur`, `date`, `projet`) VALUES ('$avis','$user', CURRENT_TIME, '$projet')";
    $query = mysqli_query($db, $requete);
    echo $query;
    if ($query) {
        echo '<h3>Commentaire Ajouté Avec Succés</h3>';
    }
