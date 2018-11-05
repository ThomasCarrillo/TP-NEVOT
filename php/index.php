<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>FormArt-In</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/paradygme_1203.css">
	<link href="https://fonts.googleapis.com/css?family=Anton|Black+Han+Sans|Righteous" rel="stylesheet">
</head>
<body>



	<?php include 'header.php' ?>
	<div class="pdigme1202_12">
		<div class="pdigme1202_8">
			<div class="textIntro">
				<h2>Lorem ipsum</h2>
				<section>		
				    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Bonum incolumis acies: misera caecitas. Idem iste, inquam, de voluptate quid sentit? Aufert enim sensus actionemque tollit omnem. Erat enim Polemonis. Potius inflammat, ut coercendi magis quam dedocendi esse videantur. Hoc enim constituto in philosophia constituta sunt omnia. Duo Reges: constructio interrete. Dicet pro me ipsa virtus nec dubitabit isti vestro beato M. Sed ut iis bonis erigimur, quae expectamus, sic laetamur iis, quae recordamur. Et quidem illud ipsum non nimium probo et tantum patior, philosophum loqui de cupiditatibus finiendis. At multis malis affectus. Non igitur bene. Gloriosa ostentatio in constituendo summo bono. Maximus dolor, inquit, brevis est. Quid nunc honeste dicit? Haec quo modo conveniant, non sane intellego. Haec dicuntur inconstantissime. At enim hic etiam dolore. Nunc haec primum fortasse audientis servire debemus. Nummus in Croesi divitiis obscuratur, pars Quae autem natura suae primae institutionis oblita est? Vitiosum est enim in dividendo partem in genere numerare. Quae in controversiam veniunt, de iis, si placet, disseramus. Nobis aliter videtur, recte secusne, postea; Quid, de quo nulla dissensio est?
				</section>
			</div>
		</div>
	</div>
		

	<form action="mail.php" method="post">
		<input type="text" name="prenom" />
		<input type="radio" name="sexe" value="homme" id="homme" /> <label for="oui">homme</label>
		<input type="radio" name="sexe" value="femme" id="femme" /> <label for="non">femme</label>
		<input type="email" name="email" />
		<input type="password" name="password_01">
		<input type="password" name="password_02">
		<input type="tel" name="tel">
		<select name="pays">
		    <option value="france">France</option>
		    <option value="italie">Italie</option>
		    <option value="Espagne">Espagne</option>
		    <option value="allemagne">Allemagne</option>
		</select>
		<input type="checkbox" name="condition">
	    <input type="submit" value="Valider" />		
	</form>

	<?php include 'footer.php' ?>		
</body>
</html>