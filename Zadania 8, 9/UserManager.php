<?php
require_once 'DatabaseConnection.php';
require_once 'User.php';
class UserManager
{
    private $dbConnection;

    /**
     * @param $dbConnection
     */
    public function __construct($dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    /**
     * @param $userId
     * @return User|null
     */
    public function getUserById($userId){
        $connection = $this->dbConnection->getConnection();
        $query = "SELECT * FROM uzytkownik WHERE id = $userId";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);
        if (!$row) {
            return null;
        }
        $user = new User($row['id'], $row['login'], $row['haslo'], $row['id_rola']);
        return $user;
    }

}
