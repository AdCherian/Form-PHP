<?php

include_once ("db_pgsql.php");
error_reporting(0);

class Pracownik
{   
    private $nazwisko;
    private $imie;
    private $wiek;
    private $doswiadczenie;
    private $zainteresowania;

    public function __construct()
    {
        $zmienna = $_SESSION["uzytkownik"];
        $this->nazwisko = $zmienna['nazwisko'];
        $this->imie = $zmienna['imie'];
        $this->wiek = $zmienna['wiek'];
        $this->doswiadczenie = $zmienna['doswiadczenie_zawodowe'];
        $this->zainteresowania = $zmienna['zainteresowania'];
    }

    public function __construct1($nazwisko, $imie, $wiek, $doswiadczenie, $zainteresowania)
    {
        $this->nazwisko = $nazwisko;
        $this->imie = $imie;
        $this->wiek = $wiek;
        $this->doswiadcznie;
        $this->zainteresowania = $zainteresowania;
    }

    public function usun_pracownika($idp)
    {
        $db = new db_pgsql();

        $kolejka = 'DELETE FROM rekrutacja.pracownicy WHERE idp = '.$idp.';';

        $res = $db->query($kolejka);
    }

    public function lista_pracownikow()
    {
        $db = new db_pgsql();

        $kolejka = 'SELECT * FROM rekrutacja.pracownicy';

        $res = $db->query($kolejka);

        echo "<p></p>";
        echo "<table>";
        $first=false;
        $idp = 0;
        echo "<tr style='color:red'>";
        echo "<td>idp</td>";
        echo "<td>nazwisko</td>";
        echo "<td>imie</td>";
        echo "<td>wiek</td>";
        echo "<td>doswiadczenie</td>";
        echo "<td>zainteresowania</td>";
        echo "</tr>";
        while($line = pg_fetch_array($res, null, PGSQL_ASSOC))
        {
            echo "<span><tr>";
            foreach($line as $col_value)
            {
                if(!$first)
                {
                    $idp = $col_value;
                    $first = true;
                }
                echo "\t\t<td>$col_value</td>\n";
            }
            echo "<td>";
            echo "<form action='usun_uzytkownika.php?idp=$idp' method='post'>";
            echo "<input type='submit' value='usun'/>";
            echo "</form>";
            echo "</td>";
            echo "</tr></span>";
        }
        echo "</table>";
    }

    public function getNazwisko()
    {
        return $this->nazwisko;
    }

    public function getImie()
    {
        return $this->imie;
    }

    public function getWiek()
    {
        return $this->wiek;
    }

    public function getDoswiadczenie()
    {
        return $this->doswiadczenie;
    }

    public function getZainteresowania()
    {
        return $this->zainteresowania;
    }

    public function insert_to_pgsql()
    {
        $sql = new db_pgsql();
        $imie = $this->imie;
        $nazwisko = $this->nazwisko;
        $wiek = $this->wiek;
        $zainteresowania = $this->zainteresowania;
        $doswiadczenie = $this->doswiadczenie;
        $kolejka = "INSERT INTO rekrutacja.pracownicy (nazwisko, imie, wiek, doswiadczenie, zainteresowania) VALUES ('".$nazwisko."', '".$imie."', ".$wiek.", '{".$doswiadczenie."}', '{".$zainteresowania."}');";
        $sql->query($kolejka);
    }
}

?>