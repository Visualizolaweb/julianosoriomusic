<?php
    require_once 'model/perfil.model.php';

    class PerfilController{
        private $PerfilM;

        public function __CONSTRUCT(){
            $this->PerfilM = new PerfilModel();
        }

        public function main(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_user/page_manage/perfil/perfil.php';
            require_once 'views/include/footer.php';
        }

        public function dashboard(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_user/user_manage/dashboard.php';
            require_once 'views/include/footer.php';
        }
    }

?>
