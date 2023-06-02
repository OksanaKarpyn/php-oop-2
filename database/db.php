<?php 
$cane = new tipi_animali('Per cani','<i class="fa-solid fa-dog" style="color: #d3a117;"></i>','crochette-cane');
$gatto = new tipi_animali('Per gatti','<i class="fa-solid fa-cat" style="color: #24b2a8;"></i>','crochette-gatto');
$tartarugha= new tipi_animali('Per tartarughe','<i class="fa-solid fa-fish" style="color: #e22222;"></i>','cibo');
$cavalli = new tipi_animali('Per cavalli','<i class="fa-solid fa-horse" style="color: #c91dc3;"></i>','cibo');

$animali = [
    new Prodotti('fieno','vitamine','https://picsum.photos/id/584/300/300',[$cavalli],'$50.00'),
    new Prodotti('giocatoli','shampo','https://picsum.photos/id/40/300/300',[$gatto],'$12.00'),
    new Prodotti('giochi','shampo','https://picsum.photos/id/1025/300/300',[$cane],'$15.00'),
    new Prodotti('crochetti-tartarug','shampo','https://picsum.photos/id/581/300/300',[$tartarugha],'$30.00'),


    new Prodotti('giocatoli','shampo','https://picsum.photos/id/40/300/300',[$gatto],'$12.00'),
     new Prodotti('fieno','vitamine','https://picsum.photos/id/584/300/300',[$cavalli],'$50.00'),
     new Prodotti('crochetti-tartarug','shampo','https://picsum.photos/id/581/300/300',[$tartarugha],'$30.00'),
    new Prodotti('giochi','shampo','https://picsum.photos/id/1025/300/300',[$cane],'$15.00'),

];


?>