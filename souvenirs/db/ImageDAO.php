<?php
include_once("DatabaseSettings.php");

class ImageDAO
{

    private $connection;

    public function ImageDAO()
    {
        $db = new DatabaseSettings();
        $this->connection = $db->getConnection();
    }

    public function getAllImages()
    {
        $sql = "SELECT * FROM `images` ORDER BY `id` ASC";
        $result = $this->connection->query($sql);
        $multiDemAr = array();
        $c = 0;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $multiDemAr[$c] = $row;
                $c++;
            }
        }
        return json_encode($multiDemAr);
    }

    public function getImageById($id)
    {

    }


}

?>
