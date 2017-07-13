<?php
    require_once 'model/pagina.model.php';

    class PaginaController{
        private $PaginaM;

        public function __CONSTRUCT(){
            $this->PaginaM = new PaginaModel();
        }

        public function main(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_user/user_manage/pagina.php';
            require_once 'views/include/footer.php';
        }

        public function dashboard(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_user/user_manage/dashboard.php';
            require_once 'views/include/footer.php';
        }
    }

?>
