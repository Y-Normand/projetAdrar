<?php
class Basket {
    private $idBasket;

    function __construct($idBasket)
    {
        $this->idBasket=$idBasket;
    }

        /**
         * Get the value of idBasket
         */ 
        public function getIdBasket()
        {
                return $this->idBasket;
        }

        /**
         * Set the value of idBasket
         *
         * @return  self
         */ 
        public function setIdBasket($idBasket)
        {
                $this->idBasket = $idBasket;

                return $this;
        }
}