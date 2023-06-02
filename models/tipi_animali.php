<?php

class tipi_animali{
    public $nome_animale;
    public $icona; 
    public $cibo;
    public $acessori;
    public function __construct( $nome_animale, $icona, $cibo, ){
        $this->nome_animale = $nome_animale;
        $this->icona = $icona;
        $this->cibo = $cibo;
    }

};

?>