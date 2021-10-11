<?php
class Delivery{
    private $idDelivery;
    private $firmDelivery;
    private $priceDelivery;
    private $timeDelivery;

    function __construct($idDelivery,$firmDelivery,$priceDelivery,$timeDelivery)
    {
        $this->idDelivery=$idDelivery;
        $this->firmDelivery=$firmDelivery;
        $this->priceDelivery=$priceDelivery;
        $this->timeDelivery=$timeDelivery;
    }


        /**
         * Get the value of idDelivery
         */ 
        public function getIdDelivery()
        {
                return $this->idDelivery;
        }

        /**
         * Set the value of idDelivery
         *
         * @return  self
         */ 
        public function setIdDelivery($idDelivery)
        {
                $this->idDelivery = $idDelivery;

                return $this;
        }

        /**
         * Get the value of firmDelivery
         */ 
        public function getFirmDelivery()
        {
                return $this->firmDelivery;
        }

        /**
         * Set the value of firmDelivery
         *
         * @return  self
         */ 
        public function setFirmDelivery($firmDelivery)
        {
                $this->firmDelivery = $firmDelivery;

                return $this;
        }

        /**
         * Get the value of priceDelivery
         */ 
        public function getPriceDelivery()
        {
                return $this->priceDelivery;
        }

        /**
         * Set the value of priceDelivery
         *
         * @return  self
         */ 
        public function setPriceDelivery($priceDelivery)
        {
                $this->priceDelivery = $priceDelivery;

                return $this;
        }

        /**
         * Get the value of timeDelivery
         */ 
        public function getTimeDelivery()
        {
                return $this->timeDelivery;
        }

        /**
         * Set the value of timeDelivery
         *
         * @return  self
         */ 
        public function setTimeDelivery($timeDelivery)
        {
                $this->timeDelivery = $timeDelivery;

                return $this;
        }
}