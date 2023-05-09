<?php 
class Panier {
    private $id_panier;
    //private $quantite;
   // private $price;
  //  private $pd_img;
   // private $prixtot;
// private $id_user;
  private $idevent;
  private $quantite;

    function __construct($id_panier,$idevent,$quantite){
        $this->id_panier=$id_panier;
        //$this->quantite=$quantite;
        //$this->price=$price;
       // $this->pd_img=$pd_img;
        //$this->prixtot=$prixtot;
       // $this->id_user=$id_user;
        $this->idevent=$idevent;
        $this->quantite=$quantite;
    }

    //GETTERS
    function getid_panier(){
        return $this->id_panier;
    }
    /*function getquantite(){
        return $this->quantite;
    }
   
    function getprice(){
        return $this->price;
    }
    /*function getpd_img(){
        return $this->pd_img;
    }*/
    /*function getprixtot(){
        return $this->prixtot;
    }*/
    /*function getid_user(){
        return $this->id_user;
    }*/
  
    function getidevent()
    {
        return $this->idevent;
    }
    function getquantite()
    {
        return $this->quantite;
    }
    //SETTERS
    function setid_panier(string $id_panier){
        $this->id_panier=$id_panier;
    }
    function setid_event(int $idevent){
        $this->idevent=$idevent;
    }
    function setquantite(int $quantite){
        $this-> quantite=$quantite;
    }
    
    
    /*function setquantite(int $quantite){
        $this->quantite=$quantite;
    }
   
   function setprice(float $price){
       $this->price=$price;
   }*/
    
    /*function setpd_img(string $pd_img){
        $this->pd_img=$pd_img;
    }*/
    /*function setprixtot(float $prixtot){
        $this->prixtot=$prixtot;
    }
    /*function setidClient(int $id_user){
        $this->id_user=$id_user;
    }*/
   
    




}
?>