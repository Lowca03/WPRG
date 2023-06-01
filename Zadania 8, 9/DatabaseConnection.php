<?php

class DatabaseConnection{
    private $connection;

    public function __construct($host, $username, $password, $database, $port)
    {
        try {
            $this->connection = mysqli_connect($host, $username, $password, $database, $port);
        }catch (mysqli_sql_exception $exception){
            exit("Błąd połączenia z Bazą Danych");
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }

    public function closeConnection(){
        mysqli_close($this->connection);
    }
}