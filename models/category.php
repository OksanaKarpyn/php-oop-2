<?php
include_once __DIR__.'./product.php';
class category {
    public $nome_animale;
    public $icona; 
   
 
    public function __construct( $_nome_animale, $_icona, ){
        $this->nome_animale = $_nome_animale;
        $this->icona = $_icona;
    }

};

?>