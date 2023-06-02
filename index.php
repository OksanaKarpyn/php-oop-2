<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende **prodotti** per animali.
I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

<?php
include_once __DIR__.'./models/prodotto.php';

// class Prodotti{

//     public $acessori;
//     public $igiene;
//     public $prezzo;
//     protected $sconto;
//     public $foto;
//     public $tipi_animali;

    
//     public function  __construct($_acessori,$_igiene, $_foto, $tipi_animali, $prezzo,  ){
//         //$this->sconto = $sconto;
//         $this->prezzo = $prezzo;
//         $this->acessori = $_acessori;
//         $this->igiene = $_igiene;
//         $this->foto = $_foto; 
//         $this->tipi_animali = $tipi_animali;
      
//     }
    
// };
include_once __DIR__.'./models/tipi_animali.php';
// class tipi_animali{
//     public $nome_animale;
//     public $icona; 
//     public $cibo;
//     public $acessori;
//     public function __construct( $nome_animale, $icona, $cibo, ){
//         $this->nome_animale = $nome_animale;
//         $this->icona = $icona;
//         $this->cibo = $cibo;
//     }

// };

// $cane = new tipi_animali('Per cani','<i class="fa-solid fa-dog" style="color: #d3a117;"></i>','crochette-cane');
// $gatto = new tipi_animali('Per gatti','<i class="fa-solid fa-cat" style="color: #24b2a8;"></i>','crochette-gatto');
// $tartarugha= new tipi_animali('Per tartarughe','<i class="fa-solid fa-fish" style="color: #e22222;"></i>','cibo');
// $cavalli = new tipi_animali('Per cavalli','<i class="fa-solid fa-horse" style="color: #c91dc3;"></i>','cibo');

include_once __DIR__ .'/database/db.php';
// $animali = [
//     new Prodotti('fieno','vitamine','https://picsum.photos/id/584/300/300',[$cavalli],'$50.00'),
//     new Prodotti('giocatoli','shampo','https://picsum.photos/id/40/300/300',[$gatto],'$12.00'),
//     new Prodotti('giochi','shampo','https://picsum.photos/id/1025/300/300',[$cane],'$15.00'),
//     new Prodotti('crochetti-tartarug','shampo','https://picsum.photos/id/581/300/300',[$tartarugha],'$30.00'),


//     new Prodotti('giocatoli','shampo','https://picsum.photos/id/40/300/300',[$gatto],'$12.00'),
//      new Prodotti('fieno','vitamine','https://picsum.photos/id/584/300/300',[$cavalli],'$50.00'),
//      new Prodotti('crochetti-tartarug','shampo','https://picsum.photos/id/581/300/300',[$tartarugha],'$30.00'),
//     new Prodotti('giochi','shampo','https://picsum.photos/id/1025/300/300',[$cane],'$15.00'),

// ];
include_once __DIR__.'./views/partials/head.php';
include_once __DIR__.'./views/partials/main.php';
include_once __DIR__.'./views/partials/footer.php';


?>