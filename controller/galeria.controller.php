<?php
    require_once 'model/galeria.model.php';

    class GaleriaController{
        private $GaleriaM;

        public function __CONSTRUCT(){
            $this->GaleriaM = new GaleriaModel();
            if (!isset($_SESSION["user"])){
              header("Location: inicio");
            }
        }

        public function main(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_user/page_manage/galeria/galeria.php';
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
          file_put_contents('views/assets/img/galeria/'.$imageName, $data);
          $id=randomAlpha('30');
          $this->GaleriaM->createGaleria($id,$imageName);
        }
        public function delete(){
          $field = $_GET["galcod"];
          $archivo = $this->GaleriaM->readGaleriaById($field);
          unlink("views/assets/img/galeria/".$archivo["gal_ruta"]);
          $this->GaleriaM->deleteGaleria($field);
          $msn="Eliminado Correctamente";
          header("Location:admin-galeria&msn=$msn");
        }

    }

?>
