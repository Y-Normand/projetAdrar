<?php
class Collection {
    private $idCollection;
    private $nameCollection; 
    private $partnerCollection; 

    function __construct($idCollection,$nameCollection,$partnerCollection)
    {
        $this->idCollection=$idCollection;
        $this->nameCollection=$nameCollection;
        $this->partnerCollection=$partnerCollection;
    }
}