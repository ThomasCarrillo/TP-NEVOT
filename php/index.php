<!DOCTYPE html> <!--  -->
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=safari">
	<meta name="keywords" content="email FormArt-In ">
	<title>FormArt-In</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" t href="../css/app.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link href="https://fonts.googleapis.com/css?family=Anton|Black+Han+Sans|Righteous" rel="stylesheet"> -->
</head>
<body>
	<?php include 'header.php' ?> <!-- Inclusion du header -->

	<div class="col-s-12">
		<div class="col-m-10 col-s-12 col-s-center">
			<div class="textIntro">
				<h2>Lorem ipsum</h2>
				<section>
				    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Bonum incolumis acies: misera caecitas. Idem iste, inquam, de voluptate quid sentit? Aufert enim sensus actionemque tollit omnem. Erat enim Polemonis. Potius inflammat, ut coercendi magis quam dedocendi esse videantur. Hoc enim constituto in philosophia constituta sunt omnia. Duo Reges: constructio interrete. Dicet pro me ipsa virtus nec dubitabit isti vestro beato M. Sed ut iis bonis erigimur, quae expectamus, sic laetamur iis, quae recordamur. Et quidem illud ipsum non nimium probo et tantum patior, philosophum loqui de cupiditatibus finiendis. At multis malis affectus. Non igitur bene. Gloriosa ostentatio in constituendo summo bono. Maximus dolor, inquit, brevis est. Quid nunc honeste dicit? Haec quo modo conveniant, non sane intellego. Haec dicuntur inconstantissime. At enim hic etiam dolore. Nunc haec primum fortasse audientis servire debemus. Nummus in Croesi divitiis obscuratur, pars Quae autem natura suae primae institutionis oblita est? Vitiosum est enim in dividendo partem in genere numerare. Quae in controversiam veniunt, de iis, si placet, disseramus. Nobis aliter videtur, recte secusne, postea; Quid, de quo nulla dissensio est?
				</section>
			</div>
		</div>
	</div>
	<video class="video" src="../ressources/video/Dramatic_Chipmunk.mp4" type="video/mp3" controls/>
	</video>
	<form method="post" action="mail.php" class="col-s-10 col-s-center">
		<div class="element">
			nom : <input type="text" name="nom">
		</div>
		<div class="element">
			Prenom : <input type="text" name="prenom">
		</div>
		<div class="element">
			<div class="radio">Sexe :
			  	<input type="radio" name="sexe" value="homme" id="homme"> <label for="oui">homme</label>
				<input type="radio" name="sexe" value="femme" id="femme"> <label for="non">femme</label>
			</div>
		</div>
		<div class="element">Mail :
			<input type="email" name="email">
		</div>
		<div class="element">Mot de passe :
			<input type="password" name="password_01">
		</div>
		<div class="element"> Validation mot de passe :
			<input type="password" name="password_02">
		</div>
		<div class="element">Téléphone :
			<input type="tel" name="tel">
		</div>
		<div class="element">Pays :
			<select name="pays">
				<option value="france">France</option>
				<option value="italie">Italie</option>
				<option value="Espagne">Espagne</option>
				<option value="allemagne">Allemagne</option>
			</select>
		</div>
		<div class="element">conditions d'usage
			<input type="checkbox" name="condition">
		</div>
		<div class="element">
			<input class=" btn-inscription col-s-2" type="submit" value="Valider" />
		</div>
	</form>

	<?php include 'footer.php' ?> <!-- Inclusion du footer -->
</body>
</html>
