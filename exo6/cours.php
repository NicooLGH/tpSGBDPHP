<?php
$nombre = $_GET['nombre'];
$i=1;
$e = $_GET['e'];
while ($i <= $e ){
    $res=$nombre*$i;
    echo "<p> <br> $res = $nombre * $i </p>";
    $i = $i+1;
}
?>