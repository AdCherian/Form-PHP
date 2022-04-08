<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="author" content="Adrian Chełstowski">
<title>Formularz pracownika</title>
<link rel = "stylesheet" href="fp.css" type="text/css">
</head>
<body>

  <h1>Formularz rekturacji pracownika - krok 3 </h1>
  <p><h1>Końcowe czynności wypełniania formularza.</h1></p>

  <form action="modyfikacja.php">
  <fieldset>
  <legend><h2>Modyfikacja formularza pracownika.</h2></legend>
  <input type="submit" value="Poprzedni">
  </fieldset>
  </form>

  <form action="fp.php?ST=4" method="post">
  <fieldset>
  <legend><h2>Zatwierdzenie danych formularza - zapis do bazy, unicestwienie sesji.</h2></legend>
  <input type="submit" value="Zatwierdź">
  </fieldset>
  </form>

<?php

if(session_id() == '')
  session_start();

  $doswiadczenie = $_POST["doswiadczenieZawodowe"];
  $zainteresowania = $_POST["zainteresowania"];

  if($doswiadczenie != "" && $zainteresowania != "")
  {
    $_SESSION["uzytkownik"] = array_merge($_SESSION["uzytkownik"], array("doswiadczenie_zawodowe" => $doswiadczenie, "zainteresowania" => $zainteresowania,));
  }

  print_r($_SESSION["uzytkownik"]);
  echo "<p id='ses'>Session id: ".session_id()."</p>";

?>
</body>
</html>