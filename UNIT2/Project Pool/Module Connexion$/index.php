<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["username"])){
        $_SESSION['username'] = "Anonymous";
    }
    if($_SESSION["username"] == "Anonymous"){
        header("Location: login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<div class="sucess">
		<h1>Bienvenue <?php echo $_SESSION['nom']; ?> <?php echo $_SESSION['prenom']; ?> alias <?php echo $_SESSION['username']; ?>!</h1>
		<?php
            if($_SESSION['username'] == "admin")
                {
            echo "<p>Bienvenue Administrateur Systeme Vous Pouvez Maintenant Accéder a La Gestion de Tout Les Profils en plus du Votre</p>";
                }
            else
                {
			echo "<p>Vous Pouvez Maintenant Accéder a La Gestion de Votre Profil</p>";
                }
            ?>
            <?php
            if($_SESSION['username'] == "admin")
                {
                    echo "<a href='admin.php' class='C-Button'>Accéder a L'Espace Administrateur</a>";
                    echo "<a href='profil.php' class='DC-Button'>Modifier Son Mot de Passe</a>";
                    echo "<a href='logout.php' class='DC-Button'>Se Deconnecter</a>";
                }
            else
                {
            echo "<a href='profil.php' class='DC-Button'>Modifier Son Mot de Passe</a>";
            echo "<a href='logout.php' class='DC-Button'>Se Deconnecter</a>";
                }
            ?>
		</div>
	</body>
</html>