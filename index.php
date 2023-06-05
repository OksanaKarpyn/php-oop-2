<?php
include_once __DIR__.'./models/product.php';
include_once __DIR__.'./models/category.php';
include_once __DIR__.'./models/food.php';
include_once __DIR__.'./models/game.php';
include_once __DIR__.'./models/medicine.php';

$gatto= new category('cibo per gatto','<i class="fa-solid fa-cat" style="color: #24b2a8;"></i>');
$cavallo = new category('cibo per cavallo','<i class="fa-solid fa-horse" style="color: #c91dc3;"></i>');
$cane = new category('cibo per cane','<i class="fa-solid fa-dog" style="color: #d3a117;"></i>');
$pesce = new category('cibo per pesce','<i class="fa-solid fa-fish" style="color: #e22222;"></i>');



$medicine = new medicina('pastiglie','collare','$12.00' ,'https://picsum.photos/id/40/300/300',$cane);
//var_dump($cane);
$product = new  Prodotti('collare','$16.00' ,'https://picsum.photos/id/40/300/300',$cane);
//var_dump($product);
$cibo = new food('crochette','2023/08/08','collare','$22.00' ,'https://picsum.photos/id/40/300/300',$cane);
//var_dump($cibo);
$gioco = new game('pallina','collare','$11.00' ,'https://picsum.photos/id/40/300/300',$cane);
//var_dump($gioco);

//var_dump($medicine);



$arrayProdotti=[
    new food('crochette','2023/09/09','guinzaglio','$14.00' ,'https://picsum.photos/id/40/300/300',$gatto),
    new food('pollo in scatola','2024/03/14','collare','$14.00' ,'https://picsum.photos/id/1025/300/300',$cane),
    new food('fieno','2023/10/19','cintura','$14.00' ,'https://picsum.photos/id/584/300/300',$cavallo), 
    new food('semini','2024/05/04','giubino','$14.00' ,'https://picsum.photos/id/581/300/300',$pesce),

    new food('crochette','2023/09/09','guinzaglio','$14.00' ,'https://picsum.photos/id/40/300/300',$gatto),
    new food('pollo in scatola','2024/03/14','collare','$14.00' ,'https://picsum.photos/id/1025/300/300',$cane),
    new food('fieno','2023/10/19','cintura','$14.00' ,'https://picsum.photos/id/584/300/300',$cavallo), 
    new food('semini','2024/05/04','giubino','$14.00' ,'https://picsum.photos/id/581/300/300',$pesce),






    
    //new Prodotti('collare','$12.00' ,'https://picsum.photos/id/1025/300/300',$cane),
    //  new Prodotti('collare','$12.00' ,'https://picsum.photos/id/1025/300/300',$cane),
     //new Prodotti('cintura','$12.00' ,'https://picsum.photos/id/1025/300/300',$cane),
      //new Prodotti('collare','$12.00' ,'https://picsum.photos/id/1025/300/300',$cane),

     //new game('pallina','occhiali','$12.00' ,'https://picsum.photos/id/584/300/300',$cavallo),
     //new medicina('2023/10/19','collare','$12.00' ,'https://picsum.photos/id/581/300/300',$pesce),


];
//var_dump($arrayProdotti);


try{
    $product->setSconto(5);    
} catch(Exception $Esconto){
    var_dump($Esconto);
    echo $Esconto->getMessage();
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <?php foreach ($arrayProdotti as $elem) {  ?>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $elem->foto ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-text d-inline-block"><?=$elem->category->nome_animale?></h5>
                            <span class="card-text"><?=$elem->category->icona?></span>
                            <p class="card-text"><?=$elem->acessori ?></p>
                            <p class="card-text"><?=$elem->prezzo?></p>
                            <h6 class="card-text"><?=$elem->cibo?></h6>
                            <h6 class="card-text"><?=$elem->scadenza?></h6>
                        </div>
                    </div>
                </div>

                <?php } ?>
            </div>
        </div>
    </div>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>