<?php
    require_once 'model/blog.model.php';

    class BlogController{
        private $BlogM;

        public function __CONSTRUCT(){
            $this->BlogM = new BlogModel();
        }

        public function main(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_user/page_manage/blog/blog.php';
            require_once 'views/include/footer.php';
        }

        public function dashboard(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_user/user_manage/dashboard.php';
            require_once 'views/include/footer.php';
        }
    }

?>
