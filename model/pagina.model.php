<?php
    class PaginaModel extends DataBase{
        private $pdo;
        function __CONSTRUCT(){
            try {
                $this->pdo = DataBase::connect();
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function readGaleria(){
          try{
      			$sql = "SELECT * FROM galeria LIMIT 20";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            }catch (Exception $e){
              die($e->getMessage()."".$e->getLine()."".$e->getFile());
          }
          return $result;
        }

        public function readContact(){
            try{
        		$sql = "SELECT * FROM contacto WHERE con_id = 'AeU839Cekf02Cw9fEcoe293c0vD2D1'";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetch(PDO::FETCH_BOTH);
              }catch (Exception $e){
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }

        public function readEventByCode($data){
            try{
        		$sql = "SELECT * FROM eventos WHERE evento_code = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data));
                $result = $query->fetch(PDO::FETCH_BOTH);
              }catch (Exception $e){
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }

        public function readBanner(){
            try{
        		$sql = "SELECT * FROM banner WHERE ban_id = '2VXe2DUcj3I4KnfeF33CFCfrWREs32'";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetch(PDO::FETCH_BOTH);
              }catch (Exception $e){
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }

        public function readUpcomingEvents(){
            try{
        		$sql = "SELECT * FROM eventos WHERE evento_fecha_inicio >= DATE(NOW()) ORDER BY evento_fecha_inicio ASC LIMIT 3";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
              }catch (Exception $e){
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }

        public function readUpcomingBlogs(){
            try{
        		$sql = "SELECT * FROM blog INNER JOIN blog_imagen ON blog.bli_id = blog_imagen.bli_id WHERE blo_fecha <= DATE(NOW()) ORDER BY blo_fecha DESC LIMIT 3";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
              }catch (Exception $e){
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }

        public function readAboutMe(){
            try{
        		$sql = "SELECT * FROM sobre WHERE sob_id = 'lO23cOv23PC2ei4dJV829CWVvivi32'";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetch(PDO::FETCH_BOTH);
              }catch (Exception $e){
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }
        public function __DESTRUCT(){
            DataBase::disconnect();
        }
    }
?>
