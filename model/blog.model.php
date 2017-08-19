<?php
    class BlogModel extends DataBase{
        private $pdo;
        function __CONSTRUCT(){
            try {
                $this->pdo = DataBase::connect();
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }
        public function createImg($id,$imageName,$fecha){
          try {
            $sql="INSERT INTO blog_imagen VALUES(?,?,?,?)";
            $query=$this->pdo->prepare($sql);
            $query->execute(array($id,$imageName,$fecha,'NO'));
          } catch (PDOException $e) {
            die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
          }
        }
        public function createForm($data){
          try {
            $sql="INSERT INTO blog VALUES(?,?,?,?,?,?)";
            $query=$this->pdo->prepare($sql);
            $query->execute(array($data[2],$data[0],$data[1],$data[3],$data[4],$data[5]));
          } catch (PDOException $e) {
            die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
          }
        }
        public function createComentario($data){
          try {
            $sql="INSERT INTO blog_comentario VALUES(?,?,?)";
            $query=$this->pdo->prepare($sql);
            $query->execute(array($data[2],$data[1],$data[0]));
          } catch (PDOException $e) {
            die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
          }
        }
        public function readFecha(){
          try {
            $sql="SELECT * FROM blog_imagen ORDER BY bli_fecha DESC LIMIT 1";
            $query=$this->pdo->prepare($sql);
            $query->execute(array());
            $result=$query->fetch(PDO::FETCH_BOTH);
          } catch (PDOException $e) {
            die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
          }
          return $result;
        }
        public function readBlog(){
          try {
            $sql="SELECT * FROM blog INNER JOIN blog_imagen ON(blog.bli_id=blog_imagen.bli_id) ";
            $query=$this->pdo->prepare($sql);
            $query->execute(array());
            $result=$query->fetchALL(PDO::FETCH_BOTH);
          } catch (PDOException $e) {
            die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
          }
          return $result;
        }
        public function readBlogaById($field){
          try {
            $sql="SELECT * FROM blog INNER JOIN blog_imagen ON(blog.bli_id=blog_imagen.bli_id) WHERE blog_imagen.bli_id = ?";
            $query=$this->pdo->prepare($sql);
            $query->execute(array($field));
            $result=$query->fetch(PDO::FETCH_BOTH);
          } catch (PDOException $e) {
            die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
          }
          return $result;
        }
        public function readBlogById($field){
          try {
            $sql="SELECT * FROM blog INNER JOIN blog_imagen ON(blog.bli_id=blog_imagen.bli_id) WHERE blo_id = ?";
            $query=$this->pdo->prepare($sql);
            $query->execute(array($field));
            $result=$query->fetch(PDO::FETCH_BOTH);
          } catch (PDOException $e) {
            die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
          }
          return $result;
        }
        public function updateFormImg($data){
          try {
            $sql="UPDATE blog_imagen SET bli_formulario = 'SI' WHERE bli_id = ?";
            $query=$this->pdo->prepare($sql);
            $query->execute(array($data[3]));
          } catch (PDOException $e) {
            die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
          }
        }
        public function readImgDelete(){
          try {
            $sql="SELECT * FROM blog_imagen WHERE bli_formulario!='SI'";
            $query=$this->pdo->prepare($sql);
            $query->execute();
            $result=$query->fetchALL(PDO::FETCH_BOTH);
          } catch (PDOException $e) {
            die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
          }
          return $result;
        }
        public function updateBlog($data){
          try {
            $sql="UPDATE blog SET blo_titulo = ?, blo_descripcion = ? WHERE blo_id = ?";
            $query=$this->pdo->prepare($sql);
            $query->execute(array($data[0],$data[1],$data[2]));
          } catch (PDOException $e) {
            die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
          }
        }
        public function deleteImg($p,$w){
          try {
            $sql="DELETE FROM blog_imagen WHERE bli_id = ?";
            $query=$this->pdo->prepare($sql);
            $query->execute(array($p[$w]));
          } catch (PDOException $e) {
            die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
          }
        }
        public function deleteBlog($field){
          try {
            $sql="DELETE FROM blog_imagen WHERE bli_id = ?";
            $query=$this->pdo->prepare($sql);
            $query->execute(array($field));
          } catch (PDOException $e) {
            die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
          }
        }
        public function __DESTRUCT(){
            DataBase::disconnect();
        }
    }
?>
