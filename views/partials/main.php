<div class="wrapper">
    <div class="container">
        <header class="m-5">
            <h1>Animal shop</h1>
        </header>
        <div class="row">
            <?php foreach ($animali as $elem) {?>
            <div class="col-3">
                <div class="card m-3" style="width: 18rem;">
                    <img src="<?php echo $elem->foto ?>" class="card-img-top" alt="...">
                    <div class="card-body">

                        <!-- animali -->
                        <div>
                            <?php foreach ($elem -> tipi_animali as $item) {?>
                            <h2 class="d-inline-block me-2"> <?php echo $item -> nome_animale ?></h2>
                            <span> <?php echo $item -> icona ?></span>
                            <p><?php echo $item-> cibo ?></p>
                            <?php }?>
                        </div>
                        <p> <?php echo $elem->acessori?></p>
                        <p> <?php echo $elem->igiene?></p>

                        <p> <?php echo $elem->prezzo?></p>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>