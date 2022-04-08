<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="author" content="Adrian Chełstowski">
<title>Lista pracowników</title>
<link rel = "stylesheet" href="fp.css" type="text/css">
</head>
<body>
<div id=tabela>
  
  <?php

  if(session_id() == '')
  session_start();
      include_once("pracownik.php");
      $pracownik = new pracownik();
      $pracownik->lista_pracownikow();

?>
</div>
</body>
</html>