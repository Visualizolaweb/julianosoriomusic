<main class="main-container">
  <header class="header-container header-container__other">
    <div class="header--navbar header--navbar__other">
      <div class="header--logo">
          <img src="views/assets/img/Recursos/logo/Logo.png" alt="Logo Julian Osorio Music" class="img--logo">
      </div>
      <i class="header--icon">
        <img class="image--icon icon--main" src="views/assets/img/Recursos/icons/menu.svg" alt="">
      </i>
      <div class="navbar-container">
          <nav class="navbar--contain">
              <img class="image--icon icon--menu" src="views/assets/img/Recursos/icons/clear.svg" alt="">
              <ul class="navbar--items">
                  <li class="navbar--item">
                      <a href="inicio" class="navbar--link">Inicio</a>
                  </li>
                  <li class="navbar--item">
                      <a href="inicio#discografia" class="navbar--link">Discografía</a>
                  </li>
                  <li class="navbar--item">
                      <a href="inicio#about-me" class="navbar--link">Sobre mí</a>
                  </li>
                  <li class="navbar--item">
                      <a href="blog" class="navbar--link">Blog</a>
                  </li>
                  <li class="navbar--item">
                      <a href="eventos" class="navbar--link">Eventos</a>
                  </li>
                  <li class="navbar--item">
                      <a href="galeria" class="navbar--link">Galeria</a>
                  </li>
                  <li class="navbar--item">
                      <a href="inicio#footer" class="navbar--link">Contáctame</a>
                  </li>
              </ul>
          </nav>
      </div>
    </div>
    <section class="gallery--container__main">
        <?php
        foreach ($this->PaginaM->readFullGaleria() as $row) {
            ?>
        <div class="gallery--item__main">
            <img class="gallery--image__main" src="views/assets/img/galeria/<?php echo $row['gal_ruta'];?>" alt="">
        </div>
        <?php
            }
        ?>
    </section>
</main>
