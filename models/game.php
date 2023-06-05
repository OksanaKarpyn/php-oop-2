<?php
include_once __DIR__.'./product.php';
class game extends Prodotti{
    public $gioco;
    public function __construct($_gioco,$_acessori, $_prezzo, $_foto, Category $_category){
        $this->gioco= $_gioco ;
        parent::__construct($_acessori, $_prezzo, $_foto, $_category);
        
    }
    public function getclassName(){
        return get_class();
    }
    public function getGioco(){
        return $this->gioco;
    }
    public function setGioco($_gioco){
        return $this->gioco = $_gioco;
    }
}

?>