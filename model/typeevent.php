<?php

class Typeevenement{
    private $idtype;
               
    private $type;    


        public function __construct($IDtype=null, $type)
        {
            $this->idtype=$IDtype;
            $this->type=$type;

        }

      

//Getters
        public function getIDtype(){
            return $this->idtype;
        }
        public function gettype(){
            return $this->type;
        }
        
        
        
        

//Setters

public function settype($type){
     $this->type=$type;
}

}

?>