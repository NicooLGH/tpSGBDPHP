<?php
$nom=$_GET['nom'];
$age=$_GET['age'];
if ($age>=18){
    echo"<p> Bienvenue $nom sur notre site web</p>";
    }
    else {
        echo"<p> Désolé $nom, vous n'avez pas l'age requis pour rentrer sur le site </p>";
    }


?>