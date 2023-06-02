<?php
class Prodotti{

    public $acessori;
    public $igiene;
    public $prezzo;
    protected $sconto;
    public $foto;
    public $tipi_animali;

    
    public function  __construct($_acessori,$_igiene, $_foto, $tipi_animali, $prezzo,  ){
        //$this->sconto = $sconto;
        $this->prezzo = $prezzo;
        $this->acessori = $_acessori;
        $this->igiene = $_igiene;
        $this->foto = $_foto; 
        $this->tipi_animali = $tipi_animali;
      
    }
    
};

?>