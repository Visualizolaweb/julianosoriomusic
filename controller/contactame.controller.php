<?php
    require_once 'model/contactame.model.php';

    class ContactameController{
        private $ContactameM;

        public function __CONSTRUCT(){
            $this->ContactameM = new ContactameModel();
            if (!isset($_SESSION["user"])){
              header("Location: inicio");
            }
        }

        public function main(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_user/page_manage/contacto/contacto.php';
            require_once 'views/include/footer.php';
        }

        public function dashboard(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_user/user_manage/dashboard.php';
            require_once 'views/include/footer.php';
        }
        public function update(){
          $data = $_POST["data"];
          if (empty($data[0]) || empty($data[1])) {
            $return = array(false,"Campos Nulos","");
          }else{
            $this->ContactameM->updateContacto($data);
            $return = array(true,"contacto","Actualizo con exito");
          }
          echo json_encode($return);
        }
    }

?>
