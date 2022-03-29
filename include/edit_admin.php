<?php 

$nom_du_serveur ="localhost";
$nom_de_la_base ="SGR-MONO";
$nom_utilisateur ="root";
$passe ="";
 
$link = mysqli_connect ($nom_du_serveur,$nom_utilisateur,$passe,$nom_de_la_base);

$pdo = new PDO("mysql:host=localhost;dbname=SGR-MONO", "root", ""); 
$id_mm = $_GET['m'];
$Requete_edit_menu = "SELECT * FROM `menu` WHERE id_menu = ".$id_mm."";
$re = $pdo->query($Requete_edit_menu);
$menu = $re->fetchALL(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="/Redouane/css/style_modif_menu.css" rel="stylesheet">
	<title>Modif menu</title>
</head>
<body>
	<div class="container">
	    <div class="form-container">
		    <div class="avatar"><i class="fa fa-user-circle fa-4x" aria-hidden="true"></i></div>
			<h2>Modification menu</h2>
            <form action="/Redouane/redirection/page_result_modif.php" method="POST">
		    <!-- <label for="id_menu">Identifiant</label> -->
		    <input name="id_menu" id="id_menu" type="hidden" value=<?php echo($menu[0]['id_menu']) ?> >
		    <!-- Le nom du menu -->
		    <label for="nom_menu">Nom du menu</label>
		    <input name="nom_menu" id="nom_menu" type="text" value="<?php echo($menu[0]['nom_menu']) ?>"> <br>
		    <!-- La description du menu -->
		    <label for="description">Description du menu</label>
		    <input name="description" id="description" type="text" value="<?php echo($menu[0]['description']) ?>"> <br>
		    <!-- Le prix unitaire du menu -->
		    <label for="prix_unitaire">Prix unitaire</label>
		    <input name="PU" id="prix_unitaire" type="text" value="<?php echo($menu[0]['PU']) ?>"> <br>
		    <!-- Le bouton d'envoi -->
		    <input type="submit" name="Validez">

			<?php
			if(isset($_POST['Validez']))
			{
             // Variable des éléments
				$idm=$_POST['id_menu'];
				$nmm=$_POST['nom_menu'];
				$descm=$_POST['description'];
				$prixm=$_POST['PU'];
				// Variable de id_user en GET
				$modifier_menu=$_GET['m'];

				$reqUP="UPDATE menu SET nom_menu='$nmm',description='$descm',PU='$prixm' WHERE id_menu ='$modifier_menu'";
				$resulat=mysqli_query($link, $reqUP);

				// if($resulat){
				// 	echo "Mise a jour réussit";
				// }
				// else{
				// 	echo "Erreur";
				// }
			}

			?>
            </form>
		</div>
		<a  id="Lien_retour"href="../index.php">Cliquez ici pour revenir sur la page administration</a>
	</div>
</body>
</html>
