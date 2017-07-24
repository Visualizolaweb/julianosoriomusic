<div class="">
    <div class="" style="width: 30%;">
    <?php
    foreach ($this->PaginaM->readFullGaleria() as $row) {
    ?>
        <img src="views/assets/img/galeria/<?php echo $row['gal_ruta'];?>" alt="">
    <?php
    }
    ?>
    </div>
</div>
