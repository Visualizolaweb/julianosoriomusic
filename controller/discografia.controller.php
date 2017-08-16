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
            $msn="Sube un Archivo MP3";
            header("Location:discografia&msn=$msn");
        }else{
            if ($tmp!="") {
              $flag=true;
              $evento = $ruta.$_FILES["cancion"]["name"];
            }else{
              $flag=false;
            }
            if ($flag==true) {
              if (move_uploaded_file($tmp,$evento)) {
                $data[1]=$_FILES["cancion"]["name"];
                $data[2]=randomAlpha('30');
                $data[3]=$_POST["letra"];
                $this->DiscografiaM->createDiscografia($data);
                $msn="Subio Correctamente";
                header("Location:index.php?c=discografia&msn=$msn");
              }else{
                $msn="Error Al Subir";
                header("Location:index.php?c=discografia&msn=$msn");
              }
            }else{
                $msn="Error Al Subir";
                header("Location:index.php?c=discografia&msn=$msn");
            }
          }
        }
        public function delete(){
          $field = $_GET["discod"];
          $archivo = $this->DiscografiaM->readDiscografiaById($field);
          unlink("views/assets/musica/".$archivo["dis_cancion"]);
          $this->DiscografiaM->deleteDiscografia($field);
          header("Location:discografia");
        }

        public function loadSongs(){
          $canciones = array(
                            array(1,"cancion1","views/assets/musica/Sleep.mp3"),
                            array(2,"cancion2","views/assets/musica/Sleep.mp3"),
                            array(3,"cancion3","views/assets/musica/Sleep.mp3"),
                            array(4,"cancion4","views/assets/musica/Sleep.mp3"),
                            array(5,"cancion5","views/assets/musica/Sleep.mp3"));

          echo json_encode($canciones);
        }
    }

?>
