<?php
class Status {
    private $idStatus;
    private $nameStatus;

    function __construct($idStatus,$nameStatus)
    {
        $this->idStatus=$idStatus;
        $this->nameStatus=$nameStatus;
    }

        /**
         * Get the value of idStatus
         */ 
        public function getIdStatus()
        {
                return $this->idStatus;
        }

        /**
         * Set the value of idStatus
         *
         * @return  self
         */ 
        public function setIdStatus($idStatus)
        {
                $this->idStatus = $idStatus;

                return $this;
        }

        /**
         * Get the value of nameStatus
         */ 
        public function getNameStatus()
        {
                return $this->nameStatus;
        }

        /**
         * Set the value of nameStatus
         *
         * @return  self
         */ 
        public function setNameStatus($nameStatus)
        {
                $this->nameStatus = $nameStatus;

                return $this;
        }
}