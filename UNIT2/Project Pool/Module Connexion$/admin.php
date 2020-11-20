<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["username"])){
        $_SESSION['username'] = "Anonymous";
    }
    if($_SESSION["username"] !== "admin"){
        if(session_destroy())
	{
		// Redirection vers la page de connexion
		header("Location: index.php");
	}
    }
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div>
		<h1><center>Bienvenue Dans L'Espace Administrateur</center></h1>
		</div>
        <div class=v-flex>
            <div>
				<iframe id="inlineFrameExample"
    			title="ID Changer"
    			width="480"
    			height="528"
    			src="profilA.php">
				</iframe>
            </div>
            <div>
			<div>
				<iframe id="inlineFrameExample"
    			title="ID Changer"
    			width="480"
    			height="528"
    			src="BDDViewer.php">
				</iframe>
            </div>
            </div>
        </div>
	</body>
</html>