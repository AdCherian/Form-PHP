<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="author" content="Adrian Chełstowski">
<title>Formularz pracownika</title>
<link rel="stylesheet" href="fp.css" type="text/css">
</head>
<body>

<div id="menu">
<h2>Menu:</h2>
<a href="fp.php?ST=1">Dodaj użytkownika</a>

<a href="fp.php?ST=-1">Lista pracowników</a>
<?php

if(session_id() == '')

session_start();
error_reporting(0);


if(!isset($_GET['ST']))
$page = 1;

else
$page = $_GET['ST'];


$form = "f".$page.".php";

if($_GET['ST'] == -1)
$form="lista_pracownikow.php";

include_once($form);

?>
</body>
</html>