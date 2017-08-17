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
    <section class="events--container__full">
        <div class="events--container__text">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link events--link__menu active" data-toggle="tab" href="#upcomingEvents" role="tab">Próximos eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link events--link__menu" data-toggle="tab" href="#pastEvents" role="tab">Eventos pasados</a>
                </li>
            </ul>
        </div>

    <div class="tab-content">
      <div class="tab-pane active" id="upcomingEvents" role="tabpanel">
          <div class="events--main">
              <?php
              foreach ($this->PaginaM->readUpcomingEventsFull() as $row) {
              ?>
              <article class="events--article">
                  <h1 class="events--title"><?php echo $row["evento_nombre"]; ?></h1>
                  <h4 class="events--start">
                      <i class="fa fa-calendar-o"></i>
                      <?php echo 'Comienza '.$row["evento_fecha_inicio"]; ?>
                  </h4>
                  <h4 class="events--start events--start__padding">
                      <i class="fa fa-clock-o"></i>
                      <?php echo 'Comienza '.substr($row["evento_hora_inicio"], 3); ?>
                  </h4>
                  <p class="events--text"><?php echo substr($row["evento_descripcion"], 0, 230).'...'; ?></p>
                  <a class="events--article__link" href="<?php echo $row['evento_code']; ?>">ver más</a>
              </article>
              <?php
              }
              ?>
          </div>
      </div>
      <div class="tab-pane" id="pastEvents" role="tabpanel">
          <div class="events--main">
              <?php
              foreach ($this->PaginaM->readPastEvents() as $row) {
              ?>
              <article class="events--article">
                  <h1 class="events--title"><?php echo $row["evento_nombre"]; ?></h1>
                  <h4 class="events--start">
                      <i class="fa fa-calendar-o"></i>
                      <?php echo 'Comienza '.$row["evento_fecha_inicio"]; ?>
                  </h4>
                  <h4 class="events--start events--start__padding">
                      <i class="fa fa-clock-o"></i>
                      <?php echo 'Comienza '.substr($row["evento_hora_inicio"], 3);; ?>
                  </h4>
                  <p class="events--text"><?php echo substr($row["evento_descripcion"], 0, 230).'...'; ?></p>
                  <a class="events--article__link" href="<?php echo $row['evento_code']; ?>">ver más</a>
              </article>
              <?php
              }
              ?>
          </div>
      </div>
    </div>
    </section>
</main>
