<?php
class Clothes{
    private $idClothe; 
    private $nameClothe; 
    private $description; 
    private $price; 
    private $quantity; 

    function __construct($idClothe,$nameClothe,$description,$price,$quantity)
    {
        $this-> idClothe = $idClothe;
        $this-> nameClothe = $nameClothe;
        $this-> description = $description;
        $this->price = $price;
        $this->quantity = $quantity; 
    }

        /**
         * Get the value of idClothe
         */ 
        public function getIdClothe()
        {
                return $this->idClothe;
        }

        /**
         * Set the value of idClothe
         *
         * @return  self
         */ 
        public function setIdClothe($idClothe)
        {
                $this->idClothe = $idClothe;

                return $this;
        }

        /**
         * Get the value of nameClothe
         */ 
        public function getNameClothe()
        {
                return $this->nameClothe;
        }

        /**
         * Set the value of nameClothe
         *
         * @return  self
         */ 
        public function setNameClothe($nameClothe)
        {
                $this->nameClothe = $nameClothe;

                return $this;
        }

        /**
         * Get the value of description
         */ 
        public function getDescription()
        {
                return $this->description;
        }

        /**
         * Set the value of description
         *
         * @return  self
         */ 
        public function setDescription($description)
        {
                $this->description = $description;

                return $this;
        }

        /**
         * Get the value of price
         */ 
        public function getPrice()
        {
                return $this->price;
        }

        /**
         * Set the value of price
         *
         * @return  self
         */ 
        public function setPrice($price)
        {
                $this->price = $price;

                return $this;
        }

        /**
         * Get the value of quantity
         */ 
        public function getQuantity()
        {
                return $this->quantity;
        }

        /**
         * Set the value of quantity
         *
         * @return  self
         */ 
        public function setQuantity($quantity)
        {
                $this->quantity = $quantity;

                return $this;
        }
}