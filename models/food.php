<?php
include_once __DIR__.'./product.php';

class food extends Prodotti{
    public $cibo;
    public $scadenza;
    public function __construct( $_cibo, $_scadenza, $_acessori, $_prezzo, $_foto, $_category){
        $this->cibo =  $_cibo;
        $this->scadenza =  $_scadenza;

        parent::__construct($_acessori, $_prezzo, $_foto, $_category);
    }
    
public function getclassName(){
    return get_class();
}

public function setCibo( $_cibo){
    return $this->cibo = $_cibo;
   
}
public function getCibo(){
    return $this->cibo;
}
}

?>