<?php
include_once('db/ImageDAO.php');
$image = new ImageDAO();
$GG = $image->getAllImages();
/*echo count($GG);
for($i = 0; $i < count($GG); $i++){
    for($j = 0; $j < count($GG[$i]); $j++){
        echo $GG[$i][$j];
    }
}*/
/*$jsonReturn = json_encode($GG);*/
/*header("Content-type: application/json");*/
/*echo $jsonReturn;*/
echo $GG;