<?php
    require_once 'model/user.model.php';

    class UserController{
        private $UserM;

        public function __CONSTRUCT(){
            $this->UserM = new UserModel();
        }

        public function main(){
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
            $_SESSION["user"]["id"] = $result["usu_id"];
            $return = array(true,"dashboard");
          }else{
            $return = array(false,"Contraseña Incorrecta");
          }
          echo json_encode($return);
     }
     public function update(){
       $data = $_POST["data"];
       for ($i=0; $i <count($data) ; $i++) {
         if (empty($data[$i])) {
           $p=1;
           break;
         }else{
           $p=0;
         }
       }
       if ($data[1]!==$data[2]) {
         $return = array(false,"Contraseñas Incorrectas","");
       }else{
         if ($p==1) {
           $return = array(false,"Campos Nulos","");
         }else{
           $data[1]=password_hash($data[1],PASSWORD_DEFAULT);
           $data[3]=$_SESSION["user"]["id"];
           $this->UserM->updateUser($data);
           $return = array(true,"mi-perfil","Actualizo Con Exito");
         }
       }
       echo json_encode($return);
     }

     public function close(){
       session_destroy();
       header("Location: inicio");
     }
  }

?>
