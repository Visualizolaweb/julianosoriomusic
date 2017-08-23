<?php
    require_once 'model/banner.model.php';

    class BannerController{
        private $BannerM;

        public function __CONSTRUCT(){
            $this->BannerM = new BannerModel();
            if (!isset($_SESSION["user"])){
              header("Location: inicio");
            }
        }

        public function main(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_user/page_manage/banner/banner.php';
        }

        public function dashboard(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_user/user_manage/dashboard.php';
            require_once 'views/include/footer.php';
        }
        public function imagen(){
          $data = $_POST['image'];
          $result = $this->BannerM->readBannerById();
          $ruta = $result["ban_ruta"];
          unlink("views/assets/img/banner/$ruta");
          list($type, $data) = explode(';', $data);
          list(, $data)      = explode(',', $data);
          $data = base64_decode($data);
          $imageName = time().'.png';
          file_put_contents('views/assets/img/banner/'.$imageName, $data);
          $this->BannerM->updateBannerImg($imageName);
        }
        public function update(){
          $data = $_POST["data"];
          if (empty($data[0]) || empty($data[1])) {
            $return = array(false,"Campos Nulos","");
          }else{
            $this->BannerM->updateBanner($data);
            $return = array(true,"banner","Actualizo con exito");
          }
          echo json_encode($return);
        }
    }

?>
