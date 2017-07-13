<?php
    require_once 'model/galeria.model.php';

    class GaleriaController{
        private $GaleriaM;

        public function __CONSTRUCT(){
            $this->GaleriaM = new GaleriaModel();
        }

        public function main(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_user/page_manage/galeria/galeria.php';
            require_once 'views/include/footer.php';
        }

        public function dashboard(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_user/user_manage/dashboard.php';
            require_once 'views/include/footer.php';
        }
    }

?>
