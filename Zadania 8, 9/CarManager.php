<?php
require_once 'Car.php';
require_once 'DatabaseConnection.php';
class CarManager
{
    private $dbConnection;

    /**
     * @param $dbConnection
     */
    public function __construct($dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public function getByCarId($carId){
        $connection = $this->dbConnection->getConnection();
        $query = "SELECT * FROM samochody WHERE id = $carId";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);
        if (!$row){
            return null;
        }
        $car = new Car($row['id'], $row['id_uzytkownik'], $row['marka'], $row['model'], $row['cena'], $row['rok'], $row['opis']);
        return $car;
    }

}