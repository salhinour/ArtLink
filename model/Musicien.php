<?php

class Musicien{
    private $musicienID;
    private $nometprenom;                
    private $description;    
    private $prix;   
    private $dispo;           
    private $image;

        public function __construct($netp,$desc,$prix,$dispo,$image)
        {
            $this->nometprenom=$netp;
            $this->descriptione=$fdesc;
            $this->prix=$prix;
            $this->dispo=$dispo;
            $this->image=$image;
        }

//Getters
        public function getId=t(){
            return $this->musicienID;
        }
        public function getnom(){
            return $this->nometprenom;
        }
        public function getdescription(){
            return $this->description;
        }
        public function getprix(){
            return $this->prix;
        }
        public function getdispo(){
            return $this->dispo;
        }
        public function getimage(){
            return $this->image;
        }

//Setters

public function setnom($last){
    return $this->nometprenom=$last;
}

}


?>