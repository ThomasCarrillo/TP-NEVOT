<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>FormArt-In</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Anton|Black+Han+Sans|Righteous" rel="stylesheet">
</head>
<body>
	<?php include 'header.php' ?>
	<?php 
		echo $_POST['nom'];
		echo $_POST['prenom'];
	?>

	<?php include 'footer.php' ?>		
</body>
</html>