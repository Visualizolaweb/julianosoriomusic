<?php
    class BannerModel extends DataBase{
        private $pdo;
        function __CONSTRUCT(){
            try {
                $this->pdo = DataBase::connect();
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function readBannerById(){
            try {
                $sql = "SELECT * FROM banner WHERE ban_id = '2VXe2DUcj3I4KnfeF33CFCfrWREs32'";
                $query = $this->pdo->prepare($sql);
                $query->execute(array());
                $result = $query->fetch(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }

        public function updateBannerImg($imageName){
            try {
                $sql = "UPDATE banner SET ban_ruta = ? WHERE ban_id = '2VXe2DUcj3I4KnfeF33CFCfrWREs32'";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($imageName));
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }
        public function updateBanner($data){
            try {
                $sql = "UPDATE banner SET ban_titulo = ?, ban_subtitulo = ? WHERE ban_id = '2VXe2DUcj3I4KnfeF33CFCfrWREs32'";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[0],$data[1]));
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function __DESTRUCT(){
            DataBase::disconnect();
        }
    }
?>
