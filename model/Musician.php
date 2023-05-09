<?php
class Musician{
    private $id_musicien;
    private $nom;
    private $prenom;                
    private $description;    
    private $prix;   
    private $dispo;           
    private $image;
    private $categorie;
    private $likes;
    private $dislikes;

        public function __construct($nom,$prenom,$desc,$prix,$image,$categorie)
        {
            $this->nom=$nom;
            $this->prenom=$prenom;
            $this->description=$desc;
            $this->prix=$prix;
            $this->image=$image;
            $this->categorie=$categorie;
            $this->likes=0;
            $this->dislikes=0;
        }

//Getters
        public function getid(){
            return $this->id_musicien;
        }
        public function getnom(){
            return $this->nom;
        }
        public function getprenom(){
            return $this->prenom;
        }
        public function getdescription(){
            return $this->description;
        }
        public function getprix(){
            return $this->prix;
        }
        public function getdisponibilite(){
            return $this->dispo;
        }
        public function getimage(){
            return $this->image;
        }
        public function getcategorie(){
            return $this->categorie;
        }
        public function getlikes(){
            return $this->likes;
        }
        public function getdislikes(){
            return $this->dislikes;
        }

//Setters

public function setid($a){
    $this->id_musicien=$a;
}
public function setnom($n){
     $this->nom=$n;
}
public function setprenom($p){
     $this->prenom=$p;
}
public function setdescription($d){
    $this->description=$d;
}
public function setprix($p){
    $this->prix=$p;
}
public function setimage($i){
    $this->image=$i;
}
public function setcategorie($c){
     $this->categorie=$c;
}
public function setlikes(){
    $this->likes=$this->likes+1;
}
public function setdislikes(){
    $this->dislikes=$this->dislikes;
}
}


?>