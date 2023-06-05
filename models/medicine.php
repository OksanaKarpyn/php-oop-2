<?php
class medicina extends Prodotti{
    public $scadenza;
    public function __construct($_scadenza,$_acessori, $_prezzo, $_foto, Category $_category){
        $this->scadenza= $_scadenza;
        parent::__construct($_acessori, $_prezzo, $_foto,  $_category);
    }
}
?>