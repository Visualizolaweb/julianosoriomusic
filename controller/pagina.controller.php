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

        public function sendEmailContact(){
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'daniel.eco18@gmail.com';
            $mail->Password = '43276762.98121818043.2365508.deco.';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->setFrom('daniel.eco18@gmail.com');
            $mail->addAddress('decardona34@misena.edu.co');
            $mail->Subject = 'Prueba de correo con PHP';
            $mail->Body = 'Mensaje enviado pais, casi que no hpta jajaja';
            $mail->CharSet = 'UTF-8';
            if ($mail->send()) {
               $msn = "Envio correctamente";
            } else {
               $msn = "Correo invalido ".$mail->ErrorInfo;
            }
            // return $msn;
            echo $msn;
        }

        public function getEvents(){
            // $data = $_POST["data"];
            $data = "YgjGChmNirUVaI3";
            $eventosByCode = $this->PaginaM->readEventByCode($data);
            ?>
            <div class="events--2__section">
                <h2 class="events--2__title"><?php echo $eventosByCode["evento_nombre"]; ?></h2>
                <h4 class="events--2__subtitle"><?php echo $eventosByCode["evento_direccion"]; ?></h4>
                <p class="events--2__text"><?php echo $eventosByCode["evento_descripcion"]; ?></p>
            </div>
        <?php
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
    }

?>
