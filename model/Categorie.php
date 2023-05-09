<?php

class Categorie{
    private $id_categorie;
    private $nom_categorie;

    
        public function __construct($c)
        {
            $this->nom_categorie=$c;
        }

//Getters
        public function getnom(){
            return $this->nom_categorie;
        }
        public function getid(){
            return $this->id_categorie;
        }
//Setters
public function setnom($a){
    $this->nom_categorie=$a;
}
}
?>