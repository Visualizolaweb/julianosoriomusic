
<main class="main-container">
  <header class="header-container header-container__other">
    <div class="header--navbar">
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
    <section class="blog--container__main blog--body__full">
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
        foreach ($this->PaginaM->readBlogs() as $row) {
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
                  <?php echo substr($row["blo_descripcion"], 0, 235).'...'; ?>
                </div>
                <div class="blog--card__footer">
                  <div class="blog--button__container">
                    <a class="blog--button__text" href="<?php echo $row['blo_id']; ?>">
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
        <?php
        }
        ?>
        </div>
    </section>
