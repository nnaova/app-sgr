<?php 

$nom_du_serveur ="localhost";
$nom_de_la_base ="SGR-MONO";
$nom_utilisateur ="root";
$passe ="";
 
$link = mysqli_connect ($nom_du_serveur,$nom_utilisateur,$passe,$nom_de_la_base);

$pdo = new PDO("mysql:host=localhost;dbname=SGR-MONO", "root", ""); 
$id_mm = $_GET['m'];
$Requete_edit_menu = "SELECT * FROM `user` WHERE id_user = ".$id_mm."";
$re = $pdo->query($Requete_edit_menu);
$users = $re->fetchALL(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div id="container">
		<form action="#" method="post">
			<h1>Mise a jour des données</h1>
			<!-- Identification(Clé primaire) -->
			<!-- <label for="id_user">Identification</label> -->
			<input type="hidden" id="id_user" name="id_user" value="<?php echo $_GET['m'] ?>" readonly> <br>
			<!-- Login -->
			<label for="login">Login :</label>
			<input type="text" id="login"  name="login"placeholder="Nom d'utilisateur"  value=<?php echo($users[0]['login']) ?>>   <br>
			<!-- Role -->
			<label for="role">Role :</label>
			<input type="text" id="role" name="role" placeholder="Votre role" value=<?php echo($users[0]['role']) ?>> <br>
			<!-- Mdp -->
			<label for="mdp">Mot de passe :</label>
			<input type="password" id="mdp" name="mdp" placeholder="Votre mot de passe" value=<?php echo($users[0]['mdp']) ?>> <br>
			<!-- Bouton de modification -->
			<input type="submit" value="Modifier" name="btmo">
			<p><a href="/sgrr/index.php">Tableau de bord</a></p>

			<?php
			if(isset($_POST['btmo']))
			{
             // Variable des éléments
				$idm=$_POST['id_user'];
				$lgm=$_POST['login'];
				$rom=$_POST['role'];
				$mdpm=$_POST['mdp'];
				// Variable de id_user en GET
				$modifier=$_GET['m'];

				$reqUP="UPDATE user SET login='$lgm',role='$rom',mdp='$mdpm' WHERE id_user ='$modifier'";
				$resulat=mysqli_query($link, $reqUP);

				if($resulat){
					echo "Mise a jour réussit";
				}
				else{
					echo "Erreur";
				}
			}

			?>
		</form>
	</div>
</body>
</html>
