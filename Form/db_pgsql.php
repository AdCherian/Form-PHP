<?php

class db_pgsql
{
    private $host = 'localhost';
    private $port='5432';
    private $dbname='s44461';
    private $user='s44461';
    private $password='Siv5h36rK';

    private $path;
    private $dbConnection;

    
    public function __construct()
    {

        $this->path= "host=$this->host port=$this->port dbname=$this->dbname user=$this->user password=$this->password";
    }


    public function connect()
    {

        $this->dbConnection = pg_connect($this->path);

  
        if(!$this->dbConnection)
        {
            die("Brak połączenia");
        }
    }

    public function query($sql)
    {
        $this->connect();
        echo "uzyskano połączenie</br>";
        echo $sql;
        $res= pg_query($this->dbConnection, $sql);
        $this->disconnect();
        return $res;
    }

    public function disconnect()
    {
        pg_close($this->dbConnection);
    }
}
?>