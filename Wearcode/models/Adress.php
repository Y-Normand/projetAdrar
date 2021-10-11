<?php
class Address {
    private $idAdress; 
    private $nameAdress; 
    private $street;
    private $additionalAdress; 
    private $postalCode; 
    private $city; 
    private $country;

    function __construct($idAdress,$nameAdress,$street,$additionalAdress,$postalCode,$city,$country)
    {
        $this->idAdress=$idAdress;
        $this->nameAdress=$nameAdress;
        $this->street=$street;
        $this->additionalAdress=$additionalAdress;
        $this->postalCode=$postalCode;
        $this->city=$city;
        $this->country=$country;
    }

        /**
         * Get the value of idAdress
         */ 
        public function getIdAdress()
        {
                return $this->idAdress;
        }

        /**
         * Set the value of idAdress
         *
         * @return  self
         */ 
        public function setIdAdress($idAdress)
        {
                $this->idAdress = $idAdress;

                return $this;
        }

        /**
         * Get the value of nameAdress
         */ 
        public function getNameAdress()
        {
                return $this->nameAdress;
        }

        /**
         * Set the value of nameAdress
         *
         * @return  self
         */ 
        public function setNameAdress($nameAdress)
        {
                $this->nameAdress = $nameAdress;

                return $this;
        }

        /**
         * Get the value of street
         */ 
        public function getStreet()
        {
                return $this->street;
        }

        /**
         * Set the value of street
         *
         * @return  self
         */ 
        public function setStreet($street)
        {
                $this->street = $street;

                return $this;
        }

        /**
         * Get the value of additionalAdress
         */ 
        public function getAdditionalAdress()
        {
                return $this->additionalAdress;
        }

        /**
         * Set the value of additionalAdress
         *
         * @return  self
         */ 
        public function setAdditionalAdress($additionalAdress)
        {
                $this->additionalAdress = $additionalAdress;

                return $this;
        }

        /**
         * Get the value of postalCode
         */ 
        public function getPostalCode()
        {
                return $this->postalCode;
        }

        /**
         * Set the value of postalCode
         *
         * @return  self
         */ 
        public function setPostalCode($postalCode)
        {
                $this->postalCode = $postalCode;

                return $this;
        }

        /**
         * Get the value of city
         */ 
        public function getCity()
        {
                return $this->city;
        }

        /**
         * Set the value of city
         *
         * @return  self
         */ 
        public function setCity($city)
        {
                $this->city = $city;

                return $this;
        }

        /**
         * Get the value of country
         */ 
        public function getCountry()
        {
                return $this->country;
        }

        /**
         * Set the value of country
         *
         * @return  self
         */ 
        public function setCountry($country)
        {
                $this->country = $country;

                return $this;
        }
}