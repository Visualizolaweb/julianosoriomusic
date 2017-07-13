<?php
    require_once 'model/banner.model.php';

    class BannerController{
        private $BannerM;

        public function __CONSTRUCT(){
            $this->BannerM = new BannerModel();
        }

        public function main(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_user/page_manage/banner/banner.php';
            require_once 'views/include/footer.php';
        }

        public function dashboard(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_user/user_manage/dashboard.php';
            require_once 'views/include/footer.php';
        }
    }

?>
