<?php
class Role {
    private $idRole;
    private $nameRole;

    function __construct($idRole,$nameRole)
    {
        $this->idRole = $idRole;
        $this->nameRole=$nameRole;
    }

        /**
         * Get the value of idRole
         */ 
        public function getIdRole()
        {
                return $this->idRole;
        }

        /**
         * Set the value of idRole
         *
         * @return  self
         */ 
        public function setIdRole($idRole)
        {
                $this->idRole = $idRole;

                return $this;
        }

        /**
         * Get the value of nameRole
         */ 
        public function getNameRole()
        {
                return $this->nameRole;
        }

        /**
         * Set the value of nameRole
         *
         * @return  self
         */ 
        public function setNameRole($nameRole)
        {
                $this->nameRole = $nameRole;

                return $this;
        }
}