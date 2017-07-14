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
        /*public function nepote(){
          $this->UserM->createUser();
        }*/

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
        public function valid(){
          $data[0] = $_POST["data"];
          $result = $this->UserM->readUserByEmail($data);
          if (count($result[0])>=1) {
            $return = array(false);
          }else {
            $return = array(true);
          }
          echo json_encode($return);
        }
        public function login(){
          $data = $_POST["data"];
          $result = $this->UserM->readUserByEmail($data);
          if (password_verify($data[1],$result["usu_password"])) {
            $return = array(true,"dashboard");
          }else{
            $return = array(false,"Contraseña Incorrecta");
          }
          echo json_encode($return);
     }
  }

?>
