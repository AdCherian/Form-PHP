


<?php

session_start();

$zmienna = $_SESSION["pracownik"];
$imie = $zmienna["imie"];
$nazwisko = $zmienna["nazwisko"];
$wiek = $zmienna["wiek"];

$url="f2.php?imie=".$imie."&"."nazwisko=".$nazwisko."&wiek=".$wiek."&inne=tak";

header('Location: '.$url);

?>