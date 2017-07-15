<?php
    require_once 'model/eventos.model.php';

    class EventosController{
        private $EventosM;

        public function __CONSTRUCT(){
            $this->EventosM = new EventosModel();
        }

        public function main(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_user/page_manage/eventos/eventos.php';
        }

        public function dashboard(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_user/user_manage/dashboard.php';
            require_once 'views/include/footer.php';
        }

        public function imagen(){
          $data = $_POST['image'];
          list($type, $data) = explode(';', $data);
          list(, $data)      = explode(',', $data);
          $data = base64_decode($data);
          $imageName = time().'.png';
          file_put_contents('views/assets/img/eventos/'.$imageName, $data);
          $id=randomAlpha('30');
          $this->EventosM->createImagen($id,$imageName);
          header("Location:eventos");
        }
    }

?>
