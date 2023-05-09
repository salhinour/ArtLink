<?php

class Evenement{
    private $idevent;
    private DateTime $dateevent;                
    private $titre;    
    private $description;   
    private $image;           
    private $localisaton;
    private $capciter;
    private $idType;

        public function __construct($IDevent=null, $dateevent,$titre,$description,$localisaton,$capciter,$image,$idType)
        {
            $this->idevent=$IDevent;
            $this->dateevent=$dateevent;
            $this->titre=$titre;
            $this->description=$description;
            $this->localisaton=$localisaton;
            $this->capciter=$capciter;
            $this->image=$image;
            $this->idType=$idType;


        }

      

//Getters
public function getIdType(){
    return $this->idType;
}

        public function getIDevent(){
            return $this->idevent;
        }
        public function getdateevent(){
            return $this->dateevent;
        }
        public function gettitre(){
            return $this->titre;
        }
        public function getdescription(){
            return $this->description;
        }
        public function getimage(){
            return $this->image;
        }
        public function getlocalisaton(){
            return $this->localisaton;
        }
        public function getcapciter(){
            return $this->capciter;
        }
        

//Setters

public function setdateevent($dateevent){
     $this->dateevent=$dateevent;
}

public function setIdType($idType){
    $this->idType=$idType;
}
public function settitre($titre){
    $this->titre=$titre;
}
public function setdiscription($description){
    $this->description=$description;
  }
  public function setimage($image){
    $this->image=$image;
  }
  public function setlocalisaton($localisaton){
    $this->localisaton=$localisaton;
  }
  public function setcapciter($capciter){
    $this->capciter=$capciter;
   
  }

}


?>