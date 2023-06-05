<?php

class Prodotti{

    public $acessori;
    public $prezzo;
    public $sconto;
    public $foto;
    public $category;
    // public $medicina;

    
    public function  __construct( $_acessori, $_prezzo, $_foto, Category $_category ){
        //$this->sconto = $sconto;
        $this->acessori = $_acessori;
        $this->prezzo = $_prezzo;
       // $this->sconto = $_sconto;
        $this->foto = $_foto; 
        $this->category = $_category;
        //$this->medicina = $_medicina;
      
    }
    // exception
    public function setSconto( $_prezzo){
        if( $_prezzo > 15){
           
           $this->sconto = 20;
           return throw new Exception('Il prezzo è maggiore del 15');
        }else{

            $this->sconto = 0;
           return throw new Exception('Il prezzo è minore del 15');
        }
    }
    function getSconto(){
       return $this->sconto = $_sconto; 
    }
    public function getcategoryIcon(){
        $icona= $this->category->icona;
        return "<i class='$icona' style='color: #d3a117;'></i>";
    }
    public function getclassName(){
        return get_class();
    }
   
};


?>