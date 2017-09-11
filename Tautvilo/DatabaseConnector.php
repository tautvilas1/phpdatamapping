<?php
require_once 'IDatabaseConnector.php';
class DatabaseConnector implements IDatabaseConnector
{
    public function ConnectToMysql()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";

        try
        {
            $conn = new PDO("mysql:host=$servername;dbname=rob", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
            die();
        }
    }
}