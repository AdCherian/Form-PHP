<?php

error_reporting(0);

session_start();
include_once("pracownik.php");

$idp=$_GET["idp"];
$pracownik = new pracownik();
$pracownik->usun_pracownika($idp);

header('Location: '."fp.php?ST=-1");
?>