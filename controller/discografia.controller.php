<?php
    require_once 'model/discografia.model.php';

    class DiscografiaController{
        private $DiscografiaM;

        public function __CONSTRUCT(){
            $this->DiscografiaM = new DiscografiaModel();
        }

        public function main(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_user/page_manage/discografia/discografia.php';
            require_once 'views/include/footer.php';
        }

        public function dashboard(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_user/user_manage/dashboard.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
          $data[0] = $_POST["data"];
          $flag=false;
          $tmp = $_FILES["cancion"]["tmp_name"];
          $ruta = "views/assets/musica/";
          $Ext  = pathinfo($_FILES["cancion"]["name"],PATHINFO_EXTENSION);
          if ($Ext!="mp3") {
            echo "Sube un Archivo MP3";
          }else{
            if ($tmp!="") {
              $flag=true;
              $evento = $ruta.$_FILES["cancion"]["name"];
            }else{
              $flag=false;
            }
            if ($flag==true) {
              if (move_uploaded_file($tmp,$evento)) {
                echo "<script>console.log('Subio Correctamente')</script>";
              }else{
                echo "<script>console.log('No Subio')</script>";
              }
            }
            $data[1]=$_FILES["cancion"]["name"];
            $data[2]=randomAlpha('30');
            $this->DiscografiaM->createDiscografia($data);
          }
        }
    }

?>
