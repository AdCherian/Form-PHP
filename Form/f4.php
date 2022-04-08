<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="author" content="Adrian Chełstowski">
<title>Formularz pracownika</title>
<link rel = "stylesheet" href="fp.css" type="text/css">
</head>
<body>

  <h1>Formularz rekturacji pracownika - krok 4/ końcowy. </h1>
  <p><h3>Dane zostały zapisane do bazy</h3></p>
  <p><h3>Sesja została usunięta/ zniszczona</h3></p>

  <form action="fp.php?ST=1">
   
  <input type="submit" value="Powrót do strony głównej"/>
  </form>

<?php

  if(session_id() == '')
  session_start();

  include_once("pracownik.php");

  $pracownik = new pracownik();
  $pracownik->insert_to_pgsql();

?>

</body>
</html>