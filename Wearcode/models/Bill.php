<?php
class Bill{
    private $idBill;
    
    function __construct($idBill)
    {
        $this->idBill=$idBill;
    }

        /**
         * Get the value of idBill
         */ 
        public function getIdBill()
        {
                return $this->idBill;
        }

        /**
         * Set the value of idBill
         *
         * @return  self
         */ 
        public function setIdBill($idBill)
        {
                $this->idBill = $idBill;

                return $this;
        }
}