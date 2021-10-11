<?php
class Color{
    private $idColor;
    private $color;

    function __construct($idColor,$color)
    {
        $this->idColor=$idColor;
        $this->color=$color;
    }

        /**
         * Get the value of idColor
         */ 
        public function getIdColor()
        {
                return $this->idColor;
        }

        /**
         * Set the value of idColor
         *
         * @return  self
         */ 
        public function setIdColor($idColor)
        {
                $this->idColor = $idColor;

                return $this;
        }

        /**
         * Get the value of color
         */ 
        public function getColor()
        {
                return $this->color;
        }

        /**
         * Set the value of color
         *
         * @return  self
         */ 
        public function setColor($color)
        {
                $this->color = $color;

                return $this;
        }
}