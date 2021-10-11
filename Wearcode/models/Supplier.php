<?php
class Supplier {
    private $idSupplier;
    private $nameSupplier;
    private $phoneSupplier;
    private $emailSupplier;

    function __construct($idSupplier,$nameSupplier,$phoneSupplier,$emailSupplier)
    {
        $this->idSupplier = $idSupplier;
        $this->nameSupplier=$nameSupplier;
        $this->phoneSupplier=$phoneSupplier;
        $this->emailSupplier=$emailSupplier;
    }

        /**
         * Get the value of idSupplier
         */ 
        public function getIdSupplier()
        {
                return $this->idSupplier;
        }

        /**
         * Set the value of idSupplier
         *
         * @return  self
         */ 
        public function setIdSupplier($idSupplier)
        {
                $this->idSupplier = $idSupplier;

                return $this;
        }

        /**
         * Get the value of nameSupplier
         */ 
        public function getNameSupplier()
        {
                return $this->nameSupplier;
        }

        /**
         * Set the value of nameSupplier
         *
         * @return  self
         */ 
        public function setNameSupplier($nameSupplier)
        {
                $this->nameSupplier = $nameSupplier;

                return $this;
        }

        /**
         * Get the value of phoneSupplier
         */ 
        public function getPhoneSupplier()
        {
                return $this->phoneSupplier;
        }

        /**
         * Set the value of phoneSupplier
         *
         * @return  self
         */ 
        public function setPhoneSupplier($phoneSupplier)
        {
                $this->phoneSupplier = $phoneSupplier;

                return $this;
        }

        /**
         * Get the value of emailSupplier
         */ 
        public function getEmailSupplier()
        {
                return $this->emailSupplier;
        }

        /**
         * Set the value of emailSupplier
         *
         * @return  self
         */ 
        public function setEmailSupplier($emailSupplier)
        {
                $this->emailSupplier = $emailSupplier;

                return $this;
        }
}