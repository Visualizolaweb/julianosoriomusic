<?php
    require_once 'model/discografia.model.php';

    class DiscografiaController{
        private $DiscografiaM;

        public function __CONSTRUCT(){
            $this->DiscografiaM = new DiscografiaModel();
            if (!isset($_SESSION["user"])){
              header("Location: inicio");
            }
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
                $data[4]="Activo";
                $contador = $this->DiscografiaM->readDiscografia();
                if (count($contador[0])<=0) {
                  $data[5]=1;
                }else{
                  foreach ($contador as $row) {
                    $data[5]=$row["dis_num"]+1;
                  }
                }
                $this->DiscografiaM->createDiscografia($data);
                $msn="Subio Correctamente";
              }else{
                $msn="Error Al Subir";
              }
            }else{
                $msn="Error Al Subir";
            }
          }
          header("Location: discografia&msn=$msn");
        }
        public function delete(){
          $field = $_GET["discod"];
          $archivo = $this->DiscografiaM->readDiscografiaById($field);
          unlink("views/assets/musica/".$archivo["dis_cancion"]);
          $this->DiscografiaM->updateDiscografia($field);
          $msn="Eliminado Correctamente";
          header("Location: discografia&msn=$msn");
        }

        public function loadSongs(){
          $item = 1;
          foreach ($this->PaginaM->loadSongsAsc() as $row) {
            $songs[] = array(
                            $item,
                            $row["dis_titulo"],
                            "views/assets/musica/".$row["dis_cancion"],
                            $row["dis_letra"]
                            );
            $item++;
          }
          echo json_encode($songs);
        }
    }

?>
