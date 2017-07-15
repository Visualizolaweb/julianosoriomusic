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
        }

        public function dashboard(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_user/user_manage/dashboard.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
          $data = $_POST['image'];
          list($type, $data) = explode(';', $data);
          list(, $data)      = explode(',', $data);
          $data = base64_decode($data);
          $imageName = time().'.png';
          file_put_contents('views/assets/img/blog/'.$imageName, $data);
          $fecha=date('Ymdhis');
          $id=randomAlpha('30');
          $this->BlogM->createImg($id,$imageName,$fecha);
        }
        public function createForm(){
          $data = $_POST["data"];
          $data[2]=randomAlpha('30');
          $fecha=date('Ymdhis');
          $result=$this->BlogM->readFecha($fecha);
          $data[3]=$result["bli_id"];
          $this->BlogM->createForm($data);
          $this->BlogM->updateFormImg($data);
          $i=0;
          foreach ($this->BlogM->readImgDelete() as $row) {
            $p[$i]=$row["bli_id"];
            $w=$i;
            $this->BlogM->deleteImg($p,$w);
            unlink("views/assets/img/blog/".$row["bli_ruta"]);
            $i++;
          }
          $return = array(true,"blog","Guardo Con Exito");
          echo json_encode($return);
        }
        public function delete(){
          $field = $_GET["blocod"];
          $archivo = $this->BlogM->readBlogaById($field);
          unlink("views/assets/img/blog/".$archivo["bli_ruta"]);
          $this->BlogM->deleteBlog($field);
          header("Location:blog");
        }
    }

?>
