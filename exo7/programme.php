<?php
$sommeEmpruntee = $_GET['sommeEmpruntee'];
$sommeRemboursee = $_GET['sommeRemboursee'];
$i = 1;
$resteAPayer = $sommeEmpruntee;
while($resteAPayer >= 0){
    $resteAPayer = $resteAPayer - $sommeRemboursee;
    echo "<p> <br> Reste à payer mois $i : $resteAPayer </p>";
    $i = $i+1;
}
?>