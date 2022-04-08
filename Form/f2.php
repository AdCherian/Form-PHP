<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="author" content="Adrian Chełstowski">
<title>Formularz pracownika</title>
<link rel = "stylesheet" href="fp.css" type="text/css">
</head>
<body>

<h1>Formularz rekrutacji pracownika - krok 2 </h1>
<form action="fp.php?ST=3" method="post">
<fieldset>
  <legend><h2>Formularz pracownika - dane dodatkowe</h2></legend>
  <p><h3>Doświadczenie zawodowe</h3></p>
  <textarea name="doswiadczenieZawodowe" rows="5" cols="30" required></textarea>
  <p><h3>Zainteresowania</h3></p>
  <textarea name="zainteresowania" rows="5" cols="30" required></textarea>
  <br>
  <input type="submit" value="Dalej">
  </fieldset>
  </form>

  <form action="fp.php?ST=1">
  <input type="submit" value="Poprzedni">
  </form>
      

<?php

  error_reporting(0);

  if(session_id() == '')
  session_start();

  if(isset($_POST["imie"]))
  $imie = $_POST["imie"];

  if(isset($_POST["nazwisko"]))
  $nazwisko = $_POST["nazwisko"];

  if(isset($_POST["wiek"]))
  $wiek = $_POST["wiek"];

  if(isset($imie) && $imie != "" && isset($nazwisko) && $nazwisko != "" && isset($wiek) && $wiek != "") 
  {
      $_SESSION["uzytkownik"] = array("imie" => $imie, "nazwisko"=>$nazwisko, "wiek"=>$wiek);

    print_r($_SESSION["uzytkownik"]);
  }
  
  $im = $_GET["imie"];
  if($im != '')
  {
    $im = $_GET["imie"];
    $naz = $_GET["nazwisko"];
    $w = $_GET["wiek"];
    $_SESSION["uzytkownik"]=array("imie"=>$im, "nazwisko"=>$naz, "wiek"=>$w);
    print_r($_SESSION["uzytkownik"]);
  }

  echo "<p id='ses'>Session id: ".session_id()."</p>";
?>

</body>
</html>