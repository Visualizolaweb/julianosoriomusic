<?php
    $code = $_GET["token"];
    $event = $this->PaginaM->readEventByCode($code);
?>
<main class="main-container">
  <header class="header-container header-container__other">
    <div class="header--navbar header--navbar__other">
      <div class="header--logo">
          <img src="views/assets/img/Recursos/logo/Logo.png" alt="" class="img--logo">
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
  </header>
</main>
<div class="">
    <h1><?php echo $event["evento_nombre"]; ?></h1>
    <h2><?php echo $event["evento_direccion"]; ?></h2>
    <p><?php echo $event["evento_descripcion"]; ?></p>
    <h4><?php echo $event["evento_fecha_inicio"]; ?></h4>
    <h4><?php echo substr($event["evento_hora_inicio"],3); ?></h4>
    <h4><?php echo $event["evento_fecha_fin"]; ?></h4>
    <h4><?php echo substr($event["evento_hora_fin"],3); ?></h4>
</div>
