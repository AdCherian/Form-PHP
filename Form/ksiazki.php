<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="author" content="Adrian Chełstowski">
<html lang="pl">
<title>Książki</title>
</head>
<body>
<h2>Książki:</h2>
<?php

$host = 'localhost';
$port='5432';
$dbname='s44461';
$user='s44461';
$password='Siv5h36rK';

$path= "host=$host port=$port dbname=$dbname user=$user password=$password";
$dbConnection = pg_connect($path);
if(!$dbConnection)
{
    die("Brak połączenia");
}

$query = 'SELECT * FROM ksiazki.ksiazka';
$res=pg_query($dbConnection, $query) or die ('Błąd zapytania: '.pg_last_error());

echo "<table>\n";
while($line=pg_fetch_array($res, null, PGSQL_ASSOC))
{
    echo "\t<tr>\n";
    foreach($line as $col_value)
    {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

pg_free_result($res);

pg_close($dbConnection);

?>

</body>
</html>