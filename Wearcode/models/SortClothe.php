<?php
class SortClothe {
    private $idSortClothe;
    private $nameSort;

    function __construct($idSortClothe,$nameSort)
    {
        $this->idSortClothe = $idSortClothe;
        $this->nameSort=$nameSort;
    }

        /**
         * Get the value of idSortClothe
         */ 
        public function getIdSortClothe()
        {
                return $this->idSortClothe;
        }

        /**
         * Set the value of idSortClothe
         *
         * @return  self
         */ 
        public function setIdSortClothe($idSortClothe)
        {
                $this->idSortClothe = $idSortClothe;

                return $this;
        }

        /**
         * Get the value of nameSort
         */ 
        public function getNameSort()
        {
                return $this->nameSort;
        }

        /**
         * Set the value of nameSort
         *
         * @return  self
         */ 
        public function setNameSort($nameSort)
        {
                $this->nameSort = $nameSort;

                return $this;
        }
}