<?php
class Type{
    private $idType; 
    private $nameType;
    
    function __construct($idType,$nameType)
    {
        $this-> idType = $idType;
        $this-> nameType = $nameType;
    }

        /**
         * Get the value of idType
         */ 
        public function getIdType()
        {
                return $this->idType;
        }

        /**
         * Set the value of idType
         *
         * @return  self
         */ 
        public function setIdType($idType)
        {
                $this->idType = $idType;

                return $this;
        }

        /**
         * Get the value of nameType
         */ 
        public function getNameType()
        {
                return $this->nameType;
        }

        /**
         * Set the value of nameType
         *
         * @return  self
         */ 
        public function setNameType($nameType)
        {
                $this->nameType = $nameType;

                return $this;
        }
}