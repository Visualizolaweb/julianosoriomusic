<?php
    require_once 'model/pagina.model.php';
    require_once 'views/assets/TwitterAPI.php';
    require_once 'views/assets/PHPMailer/PHPMailerAutoload.php';
    class PaginaController{
        private $PaginaM;

        public function __CONSTRUCT(){
            $this->PaginaM = new PaginaModel();
        }

        public function main(){
            require_once 'views/include/header-website.php';
            require_once 'views/modules/mod_user/user_manage/pagina.php';
            require_once 'views/include/footer-website.php';
        }

        public function dashboard(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_user/user_manage/dashboard.php';
            require_once 'views/include/footer.php';
        }

        public function readBlog(){
            require_once 'views/include/header-website.php';
            require_once 'views/modules/mod_user/page_manage/blog/read-blog.php';
            require_once 'views/include/footer-website.php';
        }

        public function readEvent(){
            require_once 'views/include/header-website.php';
            require_once 'views/modules/mod_user/page_manage/eventos/read-evento.php';
            require_once 'views/include/footer-website.php';
        }

        public function gallery(){
            require_once 'views/include/header-website.php';
            require_once 'views/modules/mod_user/page_manage/galeria/read-galeria.php';
            require_once 'views/include/footer-website.php';
        }

        public function fullBlogs(){
            require_once 'views/include/header-website.php';
            require_once 'views/modules/mod_user/page_manage/blog/full-blogs.php';
            require_once 'views/include/footer-website.php';
        }

        public function fullEvents(){
            require_once 'views/include/header-website.php';
            require_once 'views/modules/mod_user/page_manage/eventos/read-eventos.php';
            require_once 'views/include/footer-website.php';
        }

        public function updateReadsInBlogs(){
            $data = $_POST["data"];
            $updateBlogs = $this->PaginaM->updateReadsInBlogs($data);
            $return = array(true, "blog&token=$data");
            echo json_encode($return);
        }

        public function loadSongs(){
          $item = 1;
          foreach ($this->PaginaM->loadSongsAsc() as $row) {
            $songs[] = array(
                            $item,
                            $row["dis_titulo"],
                            "views/assets/musica/".$row["dis_cancion"]
                            );
            $item++;
          }
          echo json_encode($songs);
        }

        public function loadSongsAndroid(){
          foreach ($this->PaginaM->loadSongsAsc() as $row) {
            $songs[] = array(
                            $row["dis_titulo"],
                            "views/assets/musica/".$row["dis_cancion"]
                            );
          }
          echo json_encode($songs);
        }

        public function loadBlogsAndroid(){
          function convertMonthBlogsA($month){
            switch ($month) {
              case 'Jan':
                $month = "Enero";
                break;

              case 'Feb':
                $month = "Febrero";
                break;

              case 'Mar':
                $month = "Marzo";
                break;

              case 'Apr':
                $month = "Abril";
                break;

              case 'May':
                $month = "Mayo";
                break;

              case 'Jun':
                $month = "Junio";
                break;

              case 'Jul':
                $month = "Julio";
                break;

              case 'Aug':
                $month = "Agosto";
                break;

              case 'Sep':
                $month = "Septiembre";
                break;

              case 'Oct':
                $month = "Octubre";
                break;

              case 'Nov':
                $month = "Noviembre";
                break;

              case 'Dec':
                $month = "Diciembre";
                break;

              default:
                $month = "Enero";
                break;
            }
            return $month;
          }
          foreach ($this->PaginaM->readBlogAndroid() as $row) {
            list($years, $months, $days) = explode("-", $row["blo_fecha"]);
            $songs[] = array(
                            $row["blo_titulo"],
                            $row["blo_descripcion"],
                            $row["bli_ruta"],
                            $days." de ".convertMonthBlogsA($months)
                            );
          }
          echo json_encode($songs);
        }

        public function loadEventsAndroid(){
          function convertMonthEventsA($month){
            switch ($month) {
              case 'Jan':
                $month = "Enero";
                break;

              case 'Feb':
                $month = "Febrero";
                break;

              case 'Mar':
                $month = "Marzo";
                break;

              case 'Apr':
                $month = "Abril";
                break;

              case 'May':
                $month = "Mayo";
                break;

              case 'Jun':
                $month = "Junio";
                break;

              case 'Jul':
                $month = "Julio";
                break;

              case 'Aug':
                $month = "Agosto";
                break;

              case 'Sep':
                $month = "Septiembre";
                break;

              case 'Oct':
                $month = "Octubre";
                break;

              case 'Nov':
                $month = "Noviembre";
                break;

              case 'Dec':
                $month = "Diciembre";
                break;

              default:
                $month = "Enero";
                break;
            }
            return $month;
          }
          foreach ($this->PaginaM->readUpcomingEventsAndroid() as $row) {
            list($years, $months, $days) = explode("-", $row["evento_fecha_inicio"]);
            list($yearss, $monthss, $dayss) = explode("-", $row["evento_fecha_fin"]);
            $songs[] = array(
                            $row["evento_nombre"],
                            $row["evento_direccion"],
                            $row["evento_descripcion"],
                            $days." de ".convertMonthEventsA($months),
                            substr($row["evento_hora_inicio"], 3),
                            $dayss." de ".convertMonthEventsA($monthss),
                            substr($row["evento_hora_fin"], 3)
                            );
          }
          echo json_encode($songs);
        }

        public function sendEmailContact(){
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = '';
            $mail->Password = '';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->setFrom('');
            $mail->addAddress('');
            $mail->Subject = '';
            $mail->Body = '';
            $mail->CharSet = 'UTF-8';
            if ($mail->send()) {
               $msn = "Envio correctamente";
            } else {
               $msn = "Correo invalido ".$mail->ErrorInfo;
            }
            echo $msn;
        }

        public function getEvents(){
            $data = $_POST["data"];
            $eventosByCode = $this->PaginaM->readEventByCode($data);
            $return = $eventosByCode;
            echo json_encode($return);
        }

        public function getTwitter(){
            $settings = array(
            'oauth_access_token' => "3342443140-jpEbctIis5Ys6B2dliE0OqbNVMmd33Aj9dlfMEJ",
            'oauth_access_token_secret' => "FEfZBEfgMYcNLAVXTrKCoqVAZ0g2J1ZPfI4V5ZRiB5fpa",
            'consumer_key' => "aN74Icngg9jOL2haiNMCE2TqE",
            'consumer_secret' => "dQzHUps6qzjHIHxHU4kXWYpea01QsMou87yvrR8c0s6UJ1HHcU");

            $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';

            $getfield = '?screen_name=ux_code&include_rts=true';
            $requestMethod = 'GET';

            $twitter = new TwitterAPIExchange($settings);
            $json = $twitter->setGetfield($getfield)
                    ->buildOauth($url, $requestMethod)
                    ->performRequest();
            $json =  json_decode($json);


            function convertMonth($month){
          		switch ($month) {
          			case 'Jan':
          				$month = "Enero";
          				break;

          			case 'Feb':
          				$month = "Febrero";
          				break;

          			case 'Mar':
          				$month = "Marzo";
          				break;

          			case 'Apr':
          				$month = "Abril";
          				break;

          			case 'May':
          				$month = "Mayo";
          				break;

          			case 'Jun':
          				$month = "Junio";
          				break;

          			case 'Jul':
          				$month = "Julio";
          				break;

          			case 'Aug':
          				$month = "Agosto";
          				break;

          			case 'Sep':
          				$month = "Septiembre";
          				break;

          			case 'Oct':
          				$month = "Octubre";
          				break;

          			case 'Nov':
          				$month = "Noviembre";
          				break;

          			case 'Dec':
          				$month = "Diciembre";
          				break;

          			default:
          				$month = "Enero";
          				break;
          		}
          		return $month;
          	}
   ?>
               <?php
                   for ($x=0; $x < 4; $x++) {
               ?>
               <div class="item">
                   <div class="twitter--body">
                       <i class="fa fa-twitter fa-2x twitter--icon"></i>
                       <h2 class="twitter--name">@julianosoriomusic</h2>
           <?php
                   $tweet = $json[$x]->text;
                   echo "<p class='twitter--text'>".$tweet."</p>";
                   $date = $json[$x]->created_at;
                   echo "<h4 class='twitter--date'>"."Publicado ".substr($date, 8 , 2). " de ".convertMonth(substr($date, 4 , 3)).'</h4>';
           ?>
                   </div>
               </div>
               <?php
               }
           ?>
           <?php
        }
        public function getTwitters(){
            $url=NULL;
            return $url;
            ?>
            <div class="item">
                <div class="twitter--body">
                    <i class="fa fa-twitter fa-2x twitter--icon"></i>
                    <h2 class="twitter--name">@julianosoriomusic</h2>
                    <p class='twitter--text'>Lo sentimos, la conexión con twitter fallo.</p>
                    <h4 class='twitter--date'></h4>';
                </div>
            </div>
        <?php
        }
    }

?>
