<?php
class Reponse{

    private $idrep;
    private  DateTime $daterep;
    private $reponserep;
    private $idrec;

    public function __construct($idrep=null,$daterep,$reponserep,$idrec)
{
    $this->idrep=$idrep;
    $this->daterep=$daterep;
    $this->reponserep=$reponserep;
    $this->idrec=$idrec;
    
}
public function getidrep(){
    return $this->idrep;
}
public function setidrep($idrep){
   $this->idrep=$idrep;
}
public function getdate(){
    return $this->daterep;
}
public function setdate($daterep){
    $this->daterep=$daterep;
 }
public function getreponse(){
    return $this->reponserep;
}
public function setreponse($reponserep){
    $this->reponserep=$reponserep;
 }
public function getidrec(){
    return $this->idrec;
}
 public function setidrec($idrec){
    $this->idrec=$idrec;
 }
}
?>