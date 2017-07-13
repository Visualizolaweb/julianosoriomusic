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
            require_once 'views/include/footer.php';
        }

        public function dashboard(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_user/user_manage/dashboard.php';
            require_once 'views/include/footer.php';
        }
    }

?>
