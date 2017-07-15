<?php
    class GaleriaModel extends DataBase{
        private $pdo;
        function __CONSTRUCT(){
            try {
                $this->pdo = DataBase::connect();
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function createGaleria($id,$imageName){
            try {
                $sql = "INSERT INTO galeria VALUES (?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($id,$imageName));
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function readGaleria(){
            try {
                $sql = "SELECT * FROM galeria";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }

        public function readGaleriaById($field){
            try {
                $sql = "SELECT * FROM galeria WHERE gal_id = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $result = $query->fetch(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }

        public function deleteGaleria($field){
            try {
                $sql = "DELETE FROM galeria WHERE gal_id = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }
        public function __DESTRUCT(){
            DataBase::disconnect();
        }
    }
?>
