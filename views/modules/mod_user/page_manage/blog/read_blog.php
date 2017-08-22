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
    <section class="blog--container__one blog--container__main blog--body__full">
      <article class="blog--content">
        <?php
          $code = $_GET["token"];
          $_SESSION["blog"] = $_GET["token"];
          $blog = $this->PaginaM->readBlogByCode($code);
          $comments = $this->PaginaM->readCommentsInBlogByCode($code);
          $blogU = $this->PaginaM->updateReadsInBlogs($code);
        ?>
          <h1 class="blog--content__title"><?php echo $blog["blo_titulo"]; ?></h1>
          <img class="blog--content__img" src="<?php echo 'views/assets/img/blog/'.$blog['bli_ruta']; ?>" alt="<?php echo $blog['blo_titulo']; ?>">
          <p class="blog--content__text"><?php echo $blog["blo_descripcion"]; ?></p>
      </article>
      <div class="recent--blogs">
        <h5 class="recent--text">Entradas recientes</h5>
        <a class="recent--link" href="#">- Un antioqueño murió en impresionante accidente de tránsito en España</a>
        <a class="recent--link" href="#">- Tres heridos dejó motín en cárcel de Rionegro</a>
        <a class="recent--link" href="#">- Maduro pedirá orden de captura internacional para exfiscal Ortega</a>
      </div>
      <div class="comments--content">
            <div class="comments--content__title">
                <h2 class="comments--title">Comentarios</h2>
            </div>
              <ul class="comments--items">
                  <?php
                      foreach ($comments as $row) {
                  ?>
                  <li class="comments--item">
                      <h2 class="comments--text"><?php echo $row["com_text"]; ?></h2>
                  </li>
                  <?php
                      }
                  ?>
              </ul>
          <div class="comments--form">
              <form id="frm_read_blog" method="post">
                  <div class="">
                      <textarea id="desc_blog" name="data" class="textarea--blog" placeholder="Deja tu opinión" required="" maxlength="100"></textarea>
                      <button type="submit" class="button--blog">Comentar</button>
                  </div>
              </form>
          </div>
      </div>
    </section>
</main>
