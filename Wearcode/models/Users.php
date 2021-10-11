<?php
class User{
    private $idUser;
    private $nameUser;
    private $firstNameUser;
    private $password;
    private $email;
    private $pseudo;

    function __construct($idUser,$nameUser,$firstNameUser, $password, $email,$pseudo)
    {
        $this -> idUser = $idUser;
        $this-> nameUser = $nameUser;
        $this-> firstNameUser = $firstNameUser;
        $this-> password = $password;
        $this-> email = $email;
        $this-> pseudo = $pseudo;
    }

    

        /**
         * Get the value of idUser
         */ 
        public function getIdUser()
        {
                return $this->idUser;
        }

        /**
         * Set the value of idUser
         *
         * @return  self
         */ 
        public function setIdUser($idUser)
        {
                $this->idUser = $idUser;

                return $this;
        }

        /**
         * Get the value of nameUser
         */ 
        public function getNameUser()
        {
                return $this->nameUser;
        }

        /**
         * Set the value of nameUser
         *
         * @return  self
         */ 
        public function setNameUser($nameUser)
        {
                $this->nameUser = $nameUser;

                return $this;
        }

        /**
         * Get the value of firstNameUser
         */ 
        public function getFirstNameUser()
        {
                return $this->firstNameUser;
        }

        /**
         * Set the value of firstNameUser
         *
         * @return  self
         */ 
        public function setFirstNameUser($firstNameUser)
        {
                $this->firstNameUser = $firstNameUser;

                return $this;
        }

        /**
         * Get the value of password
         */ 
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of pseudo
         */ 
        public function getPseudo()
        {
                return $this->pseudo;
        }

        /**
         * Set the value of pseudo
         *
         * @return  self
         */ 
        public function setPseudo($pseudo)
        {
                $this->pseudo = $pseudo;

                return $this;
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
}