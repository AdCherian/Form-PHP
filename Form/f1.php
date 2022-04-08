<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="author" content="Adrian Chełstowski">
<title>Formularz pracownika</title>
<link rel = "stylesheet" href="fp.css" type="text/css">
</head>
<body>

    <h1>Formularz rekrutacji pracownika - krok 1</h1>

    <table>
    <form method="post" action="fp.php?ST=2">
        <fieldset>
        <legend><h2>Dane podstawowe</h2></legend>
        <p><h3>Nazwisko:</h3></p>
        <input type="text" value="Podaj nazwisko" name="nazwisko" required>
        
        <p><h3>Imię:</h3></p>
        <input type="text" value="Podaj imię" name="imie" required>
        
        <p><h3>Wiek:</h3></p>
        <input type="number"  name="wiek" required min = 16 max = 67>
        <br>
        <br>

        <input type="submit" value="Dalej">
        </fieldset>
       
    </form>
    </table>
    <?php
     
     if(session_id() == '')
      session_start();

      echo "<p id='ses'>Session id: ".session_id()."</p>";

      $_SESSION["uzytkownik"] = array();

    ?>

</body>
</html>