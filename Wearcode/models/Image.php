<?php
class Image {
    private $idImage;
    private $nameImage;
    private $fileImage;

    function __construct($idImage,$nameImage,$fileImage)
    {
        $this->idImage = $idImage;
        $this->nameImage=$nameImage;
        $this->fileImage=$fileImage;
    }
}