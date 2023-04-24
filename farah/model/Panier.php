<?php
class Client
{
    private $id_panier = NULL;
    private $id_reservation = NULL;
    private $quantite = NULL;
    private $prix = NULL;
    

    function __construct($a, $b, $c)
    {
        $this->id_reservation = $a;
        $this->quantite = $b;
        $this->prix = $c;
        
    }

    //////getters
    function getprix()
    {
        return $this->prix;
    }
    function getqte()
    {
        return $this->quantite;
    }
    function getid_reservation()
    {
        return $this->id_reservation;
    }
   //setters
    function setid_reservation($a)
    {
        $this->id_reservation = $a;
    }
    function setprix($a)
    {
        $this->prix = $a;
    }
    function setqte($a)
    {
        $this->quantite = $a;
    }
}