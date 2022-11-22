<?php
$produitht1=$_GET['produitht1'];
$produitht2=$_GET['produitht2'];
$produitht3=$_GET['produitht3'];
$ttva=$_GET['ttva'];

$prixht=$produitht1+$produitht2+$produitht3;
$tva=$prixht*$ttva/100;
$prixttc=$prixht+$tva;
echo"<p> Le prix hors taxe des trois produits est de $prixht € et le prix taxe comprise est de $prixttc €</p>";


if ($prixht>=300) {
	$bonus = $prixht*10/100;
	echo "<p> Vous avez obtenu un bonus de 10% sur votre carte, soit $bonus € de bonus.</p>";
}
else {
	echo "<p> Vous n'avez pas de bonus puisque les trois produits vous coutent $prixht € hors taxe.</p>";
}


?>