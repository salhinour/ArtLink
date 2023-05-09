<?php
class Client
{
    private $id = NULL;
    private $firstName = NULL;
    private $lastName = NULL;
    private $Email = NULL;
    private $Phone = NULL;
    private $nom_musicien = NULL;
    private $nom_event = NULL;
    private $lieu = NULL;
    private $Heure = NULL;
    private $Date = NULL;
    private $id_panier = NULL;

    function __construct($a, $b, $c, $d, $e, $f, $g, $h,$i,$p)
    {
        $this->lastName = $a;
        $this->firstName = $b;
        $this->nom_musicien = $c;
        $this->Date = $d;
        $this->Heure = $e;
        $this->Email = $f;
        $this->Phone = $g;
        $this->lieu = $h;
       // $this->nom_event = $i;
        $this->id_panier = $p;
    }

    //////getters 



    function getprenom()
    {
        return $this->firstName;
    }
    function getnom()
    {
        return $this->lastName;
    }
    function getEmail()
    {
        return $this->Email;
    }
    function getPhone()
    {
        return $this->Phone;
    }
    function getnom_musicien()
    {
        return $this->nom_musicien;
    }
    function getnom_event()
    {
        return $this->nom_event;
    }
    function getHeure()
    {
        return $this->Heure;
    }
    function getDate()
    {
        return $this->Date;
    }
    function getLieu()
    {
        return $this->lieu;
    }
    function getid_panier()
    {
        return $this->id_panier;
    }

    /////setters 

    function setprenom($a)
    {
        $this->firstName = $a;
    }
    function setnom($a)
    {
        $this->lastName = $a;
    }
    function setEmail($a)
    {
        $this->Email = $a;
    }
    function setPhone($a)
    {
        $this->Phone = $a;
    }
    function setnom_musicien($a)
    {
        $this->nom_musicien = $a;
    }
    function setnom_event($a)
    {
        $this->nom_event = $a;
    }
    function setHeure($a)
    {
        $this->Heure = $a;
    }
    function setDate($a)
    {
        $this->Date = $a;
    }
    function setLieu($a)
    {
        $this->lieu = $a;
    }
    function setid_panier($p)
    {
        $this->id_panier = $p;
    }
}
