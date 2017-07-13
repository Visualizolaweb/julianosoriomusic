<?php
    require_once 'model/user.model.php';

    class UserController{
        private $UserM;

        public function __CONSTRUCT(){
            $this->UserM = new UserModel();
        }

        public function main(){
            require_once 'views/include/header-website.php';
            require_once 'views/modules/mod_user/user_manage/pagina.php';
            require_once 'views/include/footer-website.php';
        }

        public function signIn(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_user/user_manage/signIn.php';
            require_once 'views/include/footer.php';
        }

        public function dashboard(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_user/user_manage/dashboard.php';
            require_once 'views/include/footer.php';
        }
    }

?>
