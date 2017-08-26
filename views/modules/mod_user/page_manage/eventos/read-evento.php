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
    <?php
    function convertMonthEvent($month){
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
    list($years, $months, $days) = explode("-", $event["evento_fecha_inicio"]);
    list($yearss, $monthss, $dayss) = explode("-", $event["evento_fecha_fin"]);
    ?>
    <section class="blog--container__one blog--container__main blog--body__full">
    <article class="blog--content event--content">
        <h1 class="blog--content__title"><?php echo $event["evento_nombre"]; ?></h1>
        <h3 class="blog--content__subtitle"><?php echo $event["evento_direccion"]; ?></h3>
        <h5 class="blog--datetime">
            <?php echo "Comienza el $days de ".convertMonthEvent($months)." del $years".' a las '.substr($event["evento_hora_inicio"],3); ?>
        </h5>
        <h5 class="blog--datetime">
            <?php echo "Termina el $dayss de ".convertMonthEvent($monthss)." del $yearss".' a las '.substr($event["evento_hora_fin"],3); ?>
        </h5>
        <p class="blog--content__text"><?php echo $event["evento_descripcion"]; ?></p>
    </article>
    <div class="recent--blogs">
      <h5 class="recent--text">Próximos eventos</h5>
      <?php
      foreach ($this->PaginaM->readUpcomingEventsAndroid() as $row) {

      ?>
      <a class="recent--link" href="<?php echo "eventos&token=".$row['evento_code'];?>"><?php echo $row["evento_nombre"]; ?></a>
      <?php
      }
      ?>
    </div>
  </section>
</header>
</main>