<?php
/**
 * Created by JetBrains PhpStorm.
 * User: MTSMDA
 * Date: 18.07.15
 * Time: 0:13
 * To change this template use File | Settings | File Templates.
 */
class DatabaseSettings
{
    private $connection;

    public function DatabaseSettings(){
        $this->connection = new mysqli("localhost", "souvenirs1925", "souvenirs1925", "souvenirs1925");
        if(mysqli_connect_error()){
            trigger_error("DB Error");
        }
    }

    private function __clone(){

    }

    public function getConnection(){
        return $this->connection;
    }
}
