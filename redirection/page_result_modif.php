<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat</title>
</head>
<body>
    <h1>Résultat:</h1>
</body>
</html>

<?php
$pdo = new PDO("mysql:host=localhost;dbname=SGR-MONO", "root", "");

if(isset($_POST['Validez'])){
	// var_dump($_POST);
	$Requette_SQL = "UPDATE `menu` SET `id_menu`=".$_POST['id_menu'].",`nom_menu`='".$_POST['nom_menu']."',`description`='".$_POST['description']."',`PU`=".$_POST['PU']." WHERE id_menu = ".$_POST['id_menu']."";
	if($pdo->exec($Requette_SQL))
	{
		echo "Le menu a bien été modifié";
	}
	else
	{
		echo"le menu n'a pas été modifié"; 
	}
}
?> <br>
<a  id="Lien_retour"href="../index.php">Cliquez ici pour revenir sur la page administration</a>