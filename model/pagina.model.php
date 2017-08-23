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

        public function readBlogAndroid(){
          try{
      			$sql = "SELECT blog.blo_id, blo_titulo, blo_descripcion, blo_fecha, blog_imagen.bli_ruta, blo_lectura FROM blog LEFT JOIN blog_imagen ON blog.bli_id = blog_imagen.bli_id WHERE blo_fecha <= CURDATE() AND blo_estado = 'PUBLICADO' ORDER BY blo_fecha DESC";
            $query = $this->pdo->prepare($sql);
            $query->execute();
            $result = $query->fetchALL(PDO::FETCH_BOTH);
          }catch (Exception $e){
            die($e->getMessage()."".$e->getLine()."".$e->getFile());
          }
          return $result;
        }

        public function readUpcomingEventsAndroid(){
          try{
        		$sql = "SELECT * FROM eventos WHERE evento_fecha_inicio >= CURDATE() AND evento_estado = 'PUBLICADO' ORDER BY evento_fecha_inicio ASC";
            $query = $this->pdo->prepare($sql);
            $query->execute();
            $result = $query->fetchALL(PDO::FETCH_BOTH);
          }catch (Exception $e){
            die($e->getMessage()."".$e->getLine()."".$e->getFile());
          }
          return $result;
        }

        public function readGaleria(){
          try{
      			$sql = "SELECT gal_ruta FROM galeria LIMIT 20";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            }catch (Exception $e){
              die($e->getMessage()."".$e->getLine()."".$e->getFile());
          }
          return $result;
        }

        public function loadSongRandom(){
          try{
      			$sql = "SELECT dis_titulo, dis_cancion FROM discografia WHERE dis_estado = 'Activo' ORDER BY dis_num ASC";
            $query = $this->pdo->prepare($sql);
            $query->execute();
            $result = $query->fetchALL(PDO::FETCH_NUM);
            }catch (Exception $e){
              die($e->getMessage()."".$e->getLine()."".$e->getFile());
          }
          return $result;
        }

        public function loadSongsAsc(){
          try{
      			$sql = "SELECT dis_titulo, dis_cancion, dis_letra FROM discografia WHERE dis_estado = 'Activo' ORDER BY dis_num ASC";
            $query = $this->pdo->prepare($sql);
            $query->execute();
            $result = $query->fetchALL(PDO::FETCH_ASSOC);
            }catch (Exception $e){
              die($e->getMessage()."".$e->getLine()."".$e->getFile());
          }
          return $result;
        }

        public function readFullGaleria(){
          try{
      			$sql = "SELECT gal_ruta FROM galeria LIMIT 80";
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

        public function readEventoImagen(){
            try{
        		$sql = "SELECT * FROM eventos_imagen WHERE evi_id = 'mek0YRcGTvUsfIGnhGDUf6ExBOecKV'";
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
        		$sql = "SELECT * FROM eventos WHERE evento_fecha_inicio >= CURDATE() AND evento_estado = 'PUBLICADO' ORDER BY evento_fecha_inicio ASC LIMIT 3";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
              }catch (Exception $e){
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }

        public function readPastEvents(){
            try{
        		    $sql = "SELECT * FROM eventos WHERE evento_fecha_inicio <= CURDATE() ORDER BY evento_fecha_inicio DESC LIMIT 30";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
              }catch (Exception $e){
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }

        public function readUpcomingEventsFull(){
            try{
        		$sql = "SELECT * FROM eventos WHERE evento_fecha_inicio >= CURDATE() ORDER BY evento_fecha_inicio ASC LIMIT 12";
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
        		$sql = "SELECT blog.blo_id, blo_titulo, blo_descripcion, blo_fecha, blog_imagen.bli_ruta, blo_lectura, COUNT(com_id) FROM blog LEFT JOIN blog_imagen ON blog.bli_id = blog_imagen.bli_id LEFT JOIN blog_comentario ON blog.blo_id = blog_comentario.blo_id WHERE blo_fecha <= CURDATE() AND blo_estado = 'PUBLICADO' GROUP BY blog.blo_id ORDER BY blo_fecha DESC LIMIT 3";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
              }catch (Exception $e){
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }

        public function readRecentBlogs(){
          try{
          $sql = "SELECT blog.blo_id, blo_titulo, blo_descripcion, blo_fecha, blog_imagen.bli_ruta, blo_lectura, COUNT(com_id) FROM blog LEFT JOIN blog_imagen ON blog.bli_id = blog_imagen.bli_id LEFT JOIN blog_comentario ON blog.blo_id = blog_comentario.blo_id WHERE blo_fecha <= CURDATE() AND blo_estado = 'PUBLICADO' GROUP BY blog.blo_id ORDER BY blo_fecha DESC LIMIT 10";
              $query = $this->pdo->prepare($sql);
              $query->execute();
              $result = $query->fetchALL(PDO::FETCH_BOTH);
            }catch (Exception $e){
              die($e->getMessage()."".$e->getLine()."".$e->getFile());
          }
          return $result;
        }

        public function readBlogs(){
            try{
        		$sql = "SELECT blog.blo_id, blo_titulo, blo_descripcion, blo_fecha, blog_imagen.bli_ruta, blo_lectura, COUNT(com_id) FROM blog LEFT JOIN blog_imagen ON blog.bli_id = blog_imagen.bli_id LEFT JOIN blog_comentario ON blog.blo_id = blog_comentario.blo_id WHERE blo_fecha <= CURDATE() GROUP BY blog.blo_id ORDER BY blo_fecha DESC";
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

        public function updateReadsInBlogs($data){
            try {
                $sql = "UPDATE blog SET blo_lectura = blo_lectura+1 WHERE blo_id = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data));
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function readBlogByCode($data){
          try {
            $sql="SELECT * FROM blog INNER JOIN blog_imagen ON(blog.bli_id = blog_imagen.bli_id) WHERE blog.blo_id = ?";
            $query=$this->pdo->prepare($sql);
            $query->execute(array($data));
            $result=$query->fetch(PDO::FETCH_BOTH);
          } catch (PDOException $e) {
            die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
          }
          return $result;
        }

        public function readCommentsInBlogByCode($data){
          try {
            $sql="SELECT com_text FROM blog INNER JOIN blog_comentario ON(blog.blo_id = blog_comentario.blo_id) WHERE blog.blo_id = ?";
            $query=$this->pdo->prepare($sql);
            $query->execute(array($data));
            $result=$query->fetchALL(PDO::FETCH_BOTH);
          } catch (PDOException $e) {
            die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
          }
          return $result;
        }
        public function __DESTRUCT(){
            DataBase::disconnect();
        }
    }
?>
