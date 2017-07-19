<div id="fakeLoader"></div>
<main class="main-container">
  <header class="header-container">
    <div class="header--navbar">
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
                      <a href="#" class="navbar--link">Inicio</a>
                  </li>
                  <li class="navbar--item">
                      <a href="#" class="navbar--link">Discografía</a>
                  </li>
                  <li class="navbar--item">
                      <a href="#about-me" class="navbar--link">Sobre mí</a>
                  </li>
                  <li class="navbar--item">
                      <a href="#" class="navbar--link">Blog</a>
                  </li>
                  <li class="navbar--item">
                      <a href="#" class="navbar--link">Eventos</a>
                  </li>
                  <li class="navbar--item">
                      <a href="#" class="navbar--link">Galeria</a>
                  </li>
                  <li class="navbar--item">
                      <a href="#footer" class="navbar--link">Contáctame</a>
                  </li>
              </ul>
          </nav>
      </div>
    </div>
    <div class="header--text">
    <?php $banner = $this->PaginaM->readBanner(); ?>
      <div class="header--text__container">
        <div class="header--text__contain">
          <h6 class="header--text__subtitle"><?php echo $banner["ban_subtitulo"]; ?></h6>
          <h1 class="header--text__title"><?php echo $banner["ban_titulo"]; ?></h1>
          <a href="#" class="header--button">Disponible en<img class="button--image" src="views/assets/img/Recursos/icons/google-play.png" alt="">
        </a>
        </div>
      </div>
    </div>
    <section class="player-container">
        <audio id="track">

        </audio>
        <nav class="song--container">
            <div class="buttons--songs">
                <button type="button" id="play-button">
                    <i class="icon--song fa fa-play" id="play"></i>
                </button>
                <button type="button" id="restart-button">
                    <i class="icon--song fa fa-stop" id="stop"></i>
                </button>
            </div>
            <h3 class="song--text">Cancion para mentir</h3>
            <div id="default-bar">
                <div id="progress-bar"></div>

            </div>
        </nav>
    </section>
  </header>
  <section class="twitter-container">
      <div class="owl-carousel owl-theme">
        <?php $this->getTwitter(); ?>
      </div>
  </section>
  <section class="infinito-container">
    <div class="infinito--header">
      <img src="views/assets/img/Recursos/header/header-Music.png" alt="">
      <h4 class="infinito--subtitle">Elit neque ullamcorper eros</h4>
      <h2 class="infinito--title">Infinito</h2>
    </div>
    <div class="infinito--player">
       <div class="player--songs">

       </div>
       <div class="player--album">

       </div>
    </div>
  </section>
  <section class="about-me--container" id="about-me">
    <div class="about-me--header">
      <img src="views/assets/img/Recursos/header/header-about.png" alt="">
      <h2 class="about-me--title">Sobre Mí</h2>
    </div>
    <div class="about-me-body">
       <div class="about-me-content">
        <div class="about-me--image">
          <img class="about--img" src="views/assets/img/Recursos/images/julian-infinito.png" alt="">
        </div>
        <div class="about-me--principal">
          <h4 class="about-me--text">
            “Phasellus varius ullamcorper magna id sagittis. In luctus lorem turpis, ac sollicitudin eros auctor nec. Ut laoreet finibus ante non iaculis. Ut lorem tortor”
          </h4>
          <h6 class="about-me--name">
            - Julian Osorio
          </h6>
        </div>
        <div class="about-me--section">
          <p class="about-me--paragraph">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempor purus quis bibendum elementum. Nulla luctus, velit vel dignissim volutpat, elit neque ullamcorper eros, vel commodo enim ex vel erat. Etiam nisi odio, dictum in scelerisque ut, accumsan in tortor. Etiam consequat nibh sit amet varius posuere. Integer pulvinar justo sed ante egestas, sit amet molestie velit lacinia.
          </p>
          <p class="about-me--paragraph">
            Donec at nulla quis massa egestas tempor at eget est. Maecenas eget laoreet ante, ut egestas turpis. Maecenas sed elit vel arcu sagittis suscipit. Aliquam erat volutpat. Sed sit amet arcu et elit congue bibendum eget in ante. Nunc ligula augue, aliquam et nulla non, bibendum imperdiet diam. Phasellus semper, nisi at fringilla rhoncus, mauris diam dapibus purus, eu varius odio mi vitae mauris. Aenean pellentesque diam luctus augue dapibus luctus.
          </p>
        </div>
       </div>
    </div>
  </section>
  <section class="blog--container">
    <div class="blog--header">
      <img src="views/assets/img/Recursos/header/header-blog.png" alt="">
      <h2 class="blog--title">Blog</h2>
    </div>
    <div class="blog--body">
      <article class="blog--card">
        <div class="blog--card__header">
          <img class="blog--card__image" src="views/assets/img/Recursos/images/img-blog-1.png" alt="">
          <div class="blog--date">
            <h4 class="blog--date__title">
              13
            </h4>
            <h6 class="blog--date__subtitle">
              Junio
            </h6>
          </div>
          <div class="blog--card__title">
            <h6 class="blog--card__subtitle">130 Lecturas</h6>
            <h6 class="blog--card__subtitle">2 Comentarios</h6>
          </div>
        </div>
        <div class="blog--card__body">
          <div class="blog--card__paragraph">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae, maiores, magni dolorum aliquam culpa inventore ullam quae qui optio obcaecati doloribus minus perferendis error dolor blanditiis! Culpa, enim.
          </div>
          <div class="blog--card__footer">
            <div class="blog--button__container">
              <a class="blog--button__text" href="#">
                Leer Más
                <i class="fa fa-chevron-right blog--button__icon"></i>
              </a>
            </div>
            <div class="blog--social">
              <a href="#"><i class="fa fa-facebook blog--social__icon"></i></a>
              <a href="#"><i class="fa fa-twitter blog--social__icon"></i></a>
              <a href="#"><i class="fa fa-google-plus blog--social__icon"></i></a>
            </div>
          </div>
        </div>
      </article>
      <article class="blog--card">
        <div class="blog--card__header">
          <img class="blog--card__image" src="views/assets/img/Recursos/images/img-blog-2.png" alt="">
          <div class="blog--date">
            <h4 class="blog--date__title">
              13
            </h4>
            <h6 class="blog--date__subtitle">
              Junio
            </h6>
          </div>
          <div class="blog--card__title">
            <h6 class="blog--card__subtitle">130 Lecturas</h6>
            <h6 class="blog--card__subtitle">2 Comentarios</h6>
          </div>
        </div>
        <div class="blog--card__body">
          <div class="blog--card__paragraph">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae, maiores, magni dolorum aliquam culpa inventore ullam quae qui optio obcaecati doloribus minus perferendis error dolor blanditiis! Culpa, enim.
          </div>
          <div class="blog--card__footer">
            <div class="blog--button__container">
              <a class="blog--button__text" href="#">
                Leer Más
                <i class="fa fa-chevron-right blog--button__icon"></i>
              </a>
            </div>
            <div class="blog--social">
              <a href="#"><i class="fa fa-facebook blog--social__icon"></i></a>
              <a href="#"><i class="fa fa-twitter blog--social__icon"></i></a>
              <a href="#"><i class="fa fa-google-plus blog--social__icon"></i></a>
            </div>
          </div>
        </div>
      </article>
      <article class="blog--card">
        <div class="blog--card__header">
          <img class="blog--card__image" src="views/assets/img/Recursos/images/img-blog-3.png" alt="">
          <div class="blog--date">
            <h4 class="blog--date__title">
              13
            </h4>
            <h6 class="blog--date__subtitle">
              Junio
            </h6>
          </div>
          <div class="blog--card__title">
            <h6 class="blog--card__subtitle">130 Lecturas</h6>
            <h6 class="blog--card__subtitle">2 Comentarios</h6>
          </div>
        </div>
        <div class="blog--card__body">
          <div class="blog--card__paragraph">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae, maiores, magni dolorum aliquam culpa inventore ullam quae qui optio obcaecati doloribus minus perferendis error dolor blanditiis! Culpa, enim.
          </div>
          <div class="blog--card__footer">
            <div class="blog--button__container">
              <a class="blog--button__text" href="#">
                Leer Más
                <i class="fa fa-chevron-right blog--button__icon"></i>
              </a>
            </div>
            <div class="blog--social">
              <a href="#"><i class="fa fa-facebook blog--social__icon"></i></a>
              <a href="#"><i class="fa fa-twitter blog--social__icon"></i></a>
              <a href="#"><i class="fa fa-google-plus blog--social__icon"></i></a>
            </div>
          </div>
        </div>
      </article>
    </div>
  </section>
  <section class="events-container">
    <div class="events--1">
        <div class="events--1__text">
            <h6 class="events--1__subtitle">
                Conoce los proximos
            </h6>
            <h2 class="events--1__title">
                Eventos
            </h2>
        </div>
    </div>
    <div class="events--links__container">
        <?php
        function convertMonthEvents($month){
            switch ($month) {
                case '01':
                    $month = "Enero";
                    break;
                case '02':
                    $month = "Febrero";
                    break;
                case '03':
                    $month = "Marzo";
                    break;
                case '04':
                    $month = "Abril";
                    break;
                case '05':
                    $month = "Mayo";
                    break;
                case '06':
                    $month = "Junio";
                    break;
                case '07':
                    $month = "Julio";
                    break;
                case '08':
                    $month = "Agosto";
                    break;
                case '09':
                    $month = "Septiembre";
                    break;
                case '10':
                    $month = "Octubre";
                    break;
                case '11':
                    $month = "Noviembre";
                    break;
                case '12':
                    $month = "Diciembre";
                    break;
                default:
                    $month = "Enero";
                    break;

            }
            return $month;
       }
        // $className = "active--link";
        $item = 1;
        foreach ($this->PaginaM->readUpcomingEvents() as $row) {
            list($years, $months, $days) = explode("-", $row["evento_fecha_inicio"]);
            if ($item === 1) {
                $className = "active--link";
            } else {
                $className = "";
            }
            $item++;
            ?>
            <div class="events--links">
                <a class="events--link <?php echo $className; ?>" href="<?php echo $row['evento_code'];?>">
                  <span class="links--month"><?php echo convertMonthEvents($months); ?></span>
                  <span class="links--day"><?php echo $days; ?></span>
                  <span class="links--year"><?php echo $years; ?></span>
                </a>
            </div>
        <?php
        }
        ?>
    </div>
    <div class="events--2">
       <div class="events--2__section">
         <h2 class="events--2__title">
           Maecenas Tristique Justo
         </h2>
         <h4 class="events--2__subtitle">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit.
         </h4>
         <p class="events--2__text">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
         </p>
       </div>
    </div>
</section>
  <section class="gallery-container">
      <section class="owl-carousel owl-theme">
          <?php
            foreach ($this->PaginaM->readGaleria() as $row) {
            ?>
                <div class="item">
                    <img class="gallery--image" src="views/assets/img/galeria/<?php echo $row['gal_ruta'];?>" alt="">
                </div>
          <?php } ?>
          <a class="item gallery-item" href="#">
              <img src="views/assets/img/galeria/ver_mas.jpg" alt="">
          </a>
      </section>
  </section>
  <section class="contact-container" id="footer">
    <div class="contact--header">
      <img src="views/assets/img/Recursos/header/header-contact.png" alt="">
      <h2 class="contact--title">Contáctame</h2>
    </div>
    <div class="contact--body">
      <div class="form-container">
        <form action="index.php?c=pagina&a=sendEmailContact" class="form--contact" method="post">
          <div class="inputs-container-50">
            <label class="label--form" for="">Nombre Completo</label>
            <input type="text" class="input--form">
          </div>
          <div class="inputs-container-50">
            <label class="label--form" for="">Correo Electrónico</label>
            <input type="email" class="input--form">
          </div>
          <div class="inputs-container-100">
            <label class="label--form" for="">Deja tu Mensaje</label>
            <textarea name="" id="" class="input--form"></textarea>
          </div>
          <button class="button--contact">Enviar</button>
        </form>
      </div>
      <div class="info-container">
        <?php $contacto = $this->PaginaM->readContact(); ?>
        <img src="views/assets/img/Recursos/logo/LogoGray.png" alt="">
        <span class="info--title info--title__padding">Correo Electrónico</span>
        <span class="info--subtitle"><?php echo $contacto["con_email"]; ?></span>
        <span class="info--title">Número Móvil</span>
        <span class="info--subtitle"><?php echo $contacto["con_telefono"]; ?></span>
      </div>
    </div>
    <footer class="contact-footer">
      <div class="footer--copyright">
        <h6 class="footer-text">
          <i class="fa fa-copyright"></i>
          2017 - 2018 Julián Osorio - Todos los derechos reservados.
        </h6>
      </div>
      <div class="footer-logo">
        <img src="views/assets/img/Recursos/logo/PoweredBy.png" alt="">
      </div>
    </footer>
  </section>
</main>
