<?php
    require_once 'model/perfil.model.php';

    class PerfilController{
        private $PerfilM;

        public function __CONSTRUCT(){
            $this->PerfilM = new PerfilModel();
            if (!isset($_SESSION["user"])){
              header("Location: inicio");
            }
        }

        public function main(){
            $per = $this->PerfilM->readSobreById();
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_user/page_manage/perfil/perfil.php';
        }

        public function imagen(){
          $data = $_POST['image'];
          $result = $this->PerfilM->readSobreById();
          $ruta = $result["sob_ruta"];
          unlink("views/assets/img/sobre/$ruta");
          list($type, $data) = explode(';', $data);
          list(, $data)      = explode(',', $data);
          $data = base64_decode($data);
          $imageName = time().'.png';
          file_put_contents('views/assets/img/sobre/'.$imageName, $data);
          $this->PerfilM->updateSobreImg($imageName);
        }

        public function update(){
          $data = $_POST["data"];
          if (empty($data[0]) || empty($data[1]) || empty($data[2])) {
            $return = array(false,"Campos Nulos","");
          }else{
            $this->PerfilM->updateSobre($data);
            $return = array(true,"mi-perfil","Actualizo con exito");
          }
          echo json_encode($return);
        }

        public function dashboard(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_user/user_manage/dashboard.php';
            require_once 'views/include/footer.php';
        }
    }

?>
