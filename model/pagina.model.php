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
        public function __DESTRUCT(){
            DataBase::disconnect();
        }
    }
?>
