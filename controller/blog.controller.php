<?php
    require_once 'model/blog.model.php';

    class BlogController{
        private $BlogM;

        public function __CONSTRUCT(){
            $this->BlogM = new BlogModel();
            if (!isset($_SESSION["user"])){
              header("Location: inicio");
            }
        }

        public function main(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_user/page_manage/blog/blog.php';
        }
        public function comentario(){
            $field = $_GET["token"];
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_user/page_manage/blog/comentario.php';
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
          $data[3]=randomAlpha('15');
          $fecha=date('Ymdhis');
          $result=$this->BlogM->readFecha($fecha);
          $data[4]=$result["bli_id"];
          $data[5]=date('Ymd');
          $data[6]=0;
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
          $return = array(true,"admin-blog","Guardo Con Exito");
          echo json_encode($return);
        }
        public function createComentario(){
          $data[0] = $_POST["data"];
          $data[1]=$_SESSION["blog"];
          if (empty($data[0]) || empty($data[1])) {
            $return = array(false,"Campos Nulos","");
          }else{
            $data[2]=randomAlpha('15');
            $this->BlogM->createComentario($data);
            $return = array(true,"Guardo Con Exito","blog&token=$data[1]");
          }
          echo json_encode($return);
        }
        public function updateData(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_user/page_manage/blog/blog.update.php';
            require_once 'views/include/footer.php';
        }
        public function update(){
          $data = $_POST["data"];
          if (empty($data[0]) || empty($data[1])) {
            $return = array(true,"Campos Nulo","");
          }else{
            $data[3]=$_SESSION["blo_code"];
            $this->BlogM->updateBlog($data);
            $return = array(true,"Actualizo Con Exito","admin-blog");
          }
          echo json_encode($return);
        }
        public function delete(){
          $field = $_GET["token"];
          $archivo = $this->BlogM->readBlogaById($field);
          unlink("views/assets/img/blog/".$archivo["bli_ruta"]);
          $field = $archivo["blo_id"];
          $p[0]=$archivo["bli_id"];
          $w=0;
          $this->BlogM->deleteImg($p,$w);
          $this->BlogM->deleteBlog($field);
          $msn="Eliminado Correctamente";
          header("Location: admin-blog&msn=$msn");
        }
        public function Comentdelete(){
          $field = $_GET["token"];
          $this->BlogM->deleteComentario($field);
          $msn="Eliminado Correctamente";
          header("Location: admin-blog&msn=$msn");
        }
    }

?>
