<?php
/**
 * Created by JetBrains PhpStorm.
 * User: MTSMDA
 * Date: 18.07.15
 * Time: 0:29
 * To change this template use File | Settings | File Templates.
 */
class Image
{

    private $id;
    private $pathImage;
    private $nameImage;
    private $descriptionImage;


    public function setDescriptionImage($descriptionImage)
    {
        $this->descriptionImage = $descriptionImage;
    }

    public function getDescriptionImage()
    {
        return $this->descriptionImage;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNameImage($nameImage)
    {
        $this->nameImage = $nameImage;
    }

    public function getNameImage()
    {
        return $this->nameImage;
    }

    public function setPathImage($pathImage)
    {
        $this->pathImage = $pathImage;
    }

    public function getPathImage()
    {
        return $this->pathImage;
    }
}
