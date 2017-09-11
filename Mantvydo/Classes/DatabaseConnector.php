<?php
class DatabaseConnector
{
    public function ConnectToMysql(string $serverName, string $dbName, string $username, string $password)
    {
        try
        {
            $conn = new PDO( "mysql:host=$serverName;dbname=$dbName", $username, $password);
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