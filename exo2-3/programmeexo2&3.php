<?php

$note1=$_GET['note1'];
$note2=$_GET['note2'];
$note3=$_GET['note3'];
$moyenne= ($note1+$note2+$note3)/3;
$coef1=$_GET['coef1'];
$coef2=$_GET['coef2'];
$coef3=$_GET['coef3'];
$moyennecoef=(($note1*$coef1)+($note2*$coef2)+($note3*$coef3))/($coef1+$coef2+$coef3);

	echo"<p> La moyenne de $note1, $note2 et $note3 est de $moyenne</p>";
    echo"<p> La moyenne coefficientee de $note1 coef $coef1, $note2 coef $coef2 et $note3 coef $coef3 est de $moyennecoef</p>";
?>