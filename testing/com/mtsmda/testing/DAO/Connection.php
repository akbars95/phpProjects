<?php
/**
 * Created by JetBrains PhpStorm.
 * User: MTSMDA
 * Date: 09.08.15
 * Time: 19:46
 * To change this template use File | Settings | File Templates.
 */
final class Connection
{
    private $servername = "localhost";
    private $username = "testing";
    private $password = "testing";
    private $dbName = "testing";

    private static $connection;

    private static $instance;

    private function __construct()
    {
        try {
            Connection::$instance = new PDO("mysql:host=$this->servername;dbname=$this->dbName", $this->username, $this->password);
            // set the PDO error mode to exception
            Connection::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public static function getConnection()
    {
        if (Connection::$instance == null) {
            new Connection();
        }

        return Connection::$instance;
    }

    public static function close(){
        Connection::$instance == null;
    }

}
?>
