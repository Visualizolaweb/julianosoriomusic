<main class="main-container">
  <?php
  $banner = $this->PaginaM->readBanner();
  $evento = $this->PaginaM->readEventoImagen();
  ?>
  <header class="header-container"
  style="background-image: url('views/assets/img/banner/<?php echo $banner['ban_ruta']; ?>');">
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
                      <a href="inicio" class="navbar--link">Inicio</a>
                  </li>
                  <li class="navbar--item">
                      <a href="#discografia" class="navbar--link ancla--link">Discografía</a>
                  </li>
                  <li class="navbar--item">
                      <a href="#about-me" class="navbar--link ancla--link">Sobre mí</a>
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
                      <a href="#footer" class="navbar--link ancla--link">Contáctame</a>
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
    <div class="player--main">
      <?php
        $randomSong = $this->PaginaM->loadSongRandom();
        $song = $randomSong[rand(0, count($randomSong) - 1)];
      ?>
      <div class="text--wrapper">
        <h4 class="player--main__text"><?php echo $song[0]; ?></h4>
      </div>
      <div class="media-wrapper">
        <audio id="player" class="audio" preload="none" style="width:100%;" autoplay>
          <source src="<?php echo 'views/assets/musica/'.$song[1]; ?>" type="audio/mp3">
        </audio>
      </div>
    </div>
  </header>
  <section class="twitter-container">
      <div class="owl-carousel owl-theme">
        <?php
        try {
            $this->getTwitter();
        } catch (Exception $e) {
            $this->getTwitters();
        }
        ?>
      </div>
  </section>
  <section class="infinito-container" id="discografia">
    <div class="infinito--header">
      <img id="album" src="views/assets/img/Recursos/header/header-Music.png" alt="">
      <!-- <h4 class="infinito--subtitle">Elit neque ullamcorper eros</h4> -->
      <h2 class="infinito--title">Infinito</h2>
    </div>
    <div class="infinito--player">
       <div class="player--songs">
           <div class="player--info">
               <h2 class="song--title"><?php echo $song[0]; ?></h2>
               <div class="player--text">
                   <!-- <a class="player--link" href="#"><i class="icon--player fa fa-facebook-official"></i>Compartir en facebook</a> -->
                   <button id="btnlyrics" class="player--link"  data-toggle="modal" ><i class="icon--player fa fa-list-alt"></i>Ver Letra</button>
               </div>
           </div>
           <ul class="container--songs">
              <?php
              $item = 1;
              foreach ($this->PaginaM->loadSongsAsc() as $row) {
                $songs[] = array(
                                $item,
                                $row["dis_titulo"],
                                "views/assets/musica/".$row["dis_cancion"],
                                $row["dis_letra"]
                                );
                $item++;
              }
              foreach ($songs as $song) {
                echo '<li class="song--item">
                         <audio id="player" class="audio" preload="none" style="width:100%;">
                             <source src="'.$song[2].'" type="audio/mp3">
                         </audio>
                     </li>';
              }
              ?>
           </ul>
       </div>

       <?php
        foreach ($songs as $letras) {
          echo '<div class="modal fade" id="lyric_mep_'.$letras[0].'" tabindex="-1" role="dialog" aria-labelledby="imageCropTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="imageCropTitle">'.$letras[1].'</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        '.$letras[3].'
                    </div>
                </div>
             </div>
            </div>
          </div>';
        }
       ?>

       <div class="player--album">
           <div class="album--container">
               <img class="album--caratula" src="views/assets/img/Recursos/playerList/default/Caratula.png" alt="">
               <img class="album--vinilo album--rotate" src="views/assets/img/Recursos/playerList/default/vinyl.png" alt="">
           </div>
       </div>
    </div>
  </section>
  <section class="about-me--container" id="about-me">
    <div class="about-me--header">
      <img src="views/assets/img/Recursos/header/header-about.png" alt="">
      <h2 class="about-me--title">Sobre Mí</h2>
    </div>
    <div class="about-me-body">
        <?php $sobre = $this->PaginaM->readAboutMe(); ?>
       <div class="about-me-content">
        <div class="about-me--image">
          <img class="about--img" src="<?php echo 'views/assets/img/sobre/'.$sobre['sob_ruta'];?>" alt="">
        </div>
        <div class="about-me--principal">
          <h4 class="about-me--text">
              <?php echo '"'.$sobre["sob_frase"].'."'; ?>
          </h4>
          <h6 class="about-me--name">
            - Julian Osorio
          </h6>
        </div>
        <div class="about-me--section">
          <p class="about-me--paragraph">
            <?php echo $sobre["sob_parrafo1"]; ?>
          </p>
          <p class="about-me--paragraph">
            <?php echo $sobre["sob_parrafo2"]; ?>
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
    <?php
    function convertMonthBlog($month){
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
    foreach ($this->PaginaM->readUpcomingBlogs() as $row) {
        list($years, $months, $days) = explode("-", $row["blo_fecha"]);
    ?>
        <article class="blog--card">
          <div class="blog--card__header">
            <img class="blog--card__image" src="<?php echo 'views/assets/img/blog/'.$row['bli_ruta'];?>" alt="">
            <div class="blog--date">
              <h4 class="blog--date__title">
                <?php echo $days; ?>
              </h4>
              <h6 class="blog--date__subtitle">
                <?php echo convertMonthBlog($months); ?>
              </h6>
            </div>
            <div class="blog--card__title">
              <h6 class="blog--card__subtitle">
                  <?php
                    if ($row["blo_lectura"] == 1) {
                        echo $row["blo_lectura"].' Lectura';
                    } else {
                        echo $row["blo_lectura"].' Lecturas';
                    }
                  ?>
              </h6>
              <h6 class="blog--card__subtitle">
                  <?php
                  if ($row["COUNT(com_id)"] == 1) {
                      echo $row["COUNT(com_id)"].' Comentario';
                  } else {
                      echo $row["COUNT(com_id)"].' Comentarios';
                  }
                  ?>
              </h6>
            </div>
          </div>
          <div class="blog--card__body">
            <div class="blog--card__text">
              <?php echo $row["blo_titulo"]; ?>
            </div>
            <div class="blog--card__paragraph">
              <?php echo substr($row["blo_descripcion"], 0, 230).'...'; ?>
            </div>
            <div class="blog--card__footer">
              <div class="blog--button__container">
                <a class="blog--button__text" href="<?php echo "blog&token=".$row['blo_id']; ?>">
                  Leer Más
                  <i class="fa fa-chevron-right blog--button__icon"></i>
                </a>
              </div>
            </div>
          </div>
        </article>
    <?php
    }
    ?>
    </div>
  </section>
  <section class="events-container">
    <div class="events--1" style="background-image: url('views/assets/img/eventos/<?php echo $evento['evi_ruta']; ?>');">
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
         <h2 class="events--2__title"></h2>
         <h4 class="events--2__subtitle"></h4>
         <p class="events--2__text"></p>
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
            <textarea name="" id="" class="input--form textarea--contact"></textarea>
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
