<?php
    $code = $_GET["token"];
    $blog = $this->PaginaM->readBlogByCode($code);
    $comments = $this->PaginaM->readCommentsInBlogByCode($code);
?>
<div class="" style="display: flex;">
    <section>
        <article class="">
            <h1><?php echo $blog["blo_titulo"]; ?></h1>
            <img src="<?php echo 'views/assets/img/blog/'.$blog['bli_ruta']; ?>" alt="<?php echo $blog['blo_titulo']; ?>">
            <p><?php echo $blog["blo_descripcion"]; ?></p>
        </article>
    </section>
    <section>
        <?php
            foreach ($comments as $row) {
        ?>
            <div class="">
                <h2><?php echo $row["com_text"]; ?></h2>
            </div>
        <?php
            }
        ?>
        <div class="">
            <form class="" method="post">
                <input type="text" name="" value="">
            </form>
        </div>
    </section>
</div>
