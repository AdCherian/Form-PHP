<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="author" content="Adrian Chełstowski">
<title>Sesje_test_b</title>
</head>

<body>
<?php
session_start();

$ts = array();

for($i = 0; $i < 10; $i++)
{
	array_push($ts, rand(-100,100));
    echo $ts[$i];
}

$_SESSION["tablica"] = $ts;
print_r($_SESSION["tablica"]);

?>

</body>
</html>