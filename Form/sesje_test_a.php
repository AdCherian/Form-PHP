

<?php

session_start();
/* rozpoczęcie nowej lub wznowienie istniejącwej sesji */
$_SESSION["zmienna"] = "Adrian Chełstowski";
//zmienna sesyjna o nazwie zmienna została utworzona
echo "Jestem ".$_SESSION["zmienna"];
//zostaje wydrukowany tekst: zmienna

echo session_id();
unset($_SESSION["zmienna"]);


?>