<?php
class Size {
    private $idSize;
    private $nameSize;
    private $letterSize;

    function __construct($idSize,$nameSize,$letterSize)
    {
        $this->idSize=$idSize;
        $this->nameSize=$nameSize;
        $this->letterSize=$letterSize;
    }

        /**
         * Get the value of idSize
         */ 
        public function getIdSize()
        {
                return $this->idSize;
        }

        /**
         * Set the value of idSize
         *
         * @return  self
         */ 
        public function setIdSize($idSize)
        {
                $this->idSize = $idSize;

                return $this;
        }

        /**
         * Get the value of nameSize
         */ 
        public function getNameSize()
        {
                return $this->nameSize;
        }

        /**
         * Set the value of nameSize
         *
         * @return  self
         */ 
        public function setNameSize($nameSize)
        {
                $this->nameSize = $nameSize;

                return $this;
        }

        /**
         * Get the value of letterSize
         */ 
        public function getLetterSize()
        {
                return $this->letterSize;
        }

        /**
         * Set the value of letterSize
         *
         * @return  self
         */ 
        public function setLetterSize($letterSize)
        {
                $this->letterSize = $letterSize;

                return $this;
        }
}