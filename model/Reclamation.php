<?php
class Reclamation{

    private $idrec;
    private $objetrec;
    private  DateTime $daterec;
    private $messagerec;
    private $etatrec;
    private $rating;

    public function __construct($idrec=null,$objetrec,$daterec,$messagerec,$etatrec,$rating)
{
    $this->idrec=$idrec;
    $this->objetrec=$objetrec;
    $this->daterec=$daterec;
    $this->messagerec=$messagerec;
    $this->etatrec=$etatrec;
    $this->rating=$rating;
    
}
public function getidrec(){
    return $this->idrec;
}
public function getobjet(){
    return $this->objetrec;
}
public function setobjet($objetrec){
   $this->objetrec=$objetrec;
}
public function getdate(){
    return $this->daterec;
}
public function setdate($daterec){
    $this->daterec=$daterec;
 }
public function getmessage(){
    return $this->messagerec;
}
public function setmessage($messagerec){
    $this->messagerec=$messagerec;
 }
public function getetat(){
    return $this->etatrec;
}
public function setetat($etatrec){
    $this->etatrec=$etatrec;
 }
 public function setidrec($idrec){
    $this->idrec=$idrec;
 }
 public function getrating(){
    return $this->rating;
}
public function setrating($rating){
    $this->rating=$rating;
 }
}
?>