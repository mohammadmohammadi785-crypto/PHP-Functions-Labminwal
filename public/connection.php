<?php
class dbConnection
{
    private $hostName = "localhost";
    private $db_name = "testing_db";
    private $username = "root";
    private $password = "";
    public function connect()
    {
        try {
            $dbsorce = "mysql:host=" . $this->hostName . ";dbname=" . $this->db_name . ";";
            $connect = new PDO($dbsorce, $this->username, $this->password);
            echo "db connected successfully";
            return $connect;
        } catch (Exception $e) {
            echo "somthing went wrong" . $e->getMessage();
        }
    }
}
$db = new dbConnection();
$db->connect();
