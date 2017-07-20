<?php
    class PerfilModel extends DataBase{
        private $pdo;
        function __CONSTRUCT(){
            try {
                $this->pdo = DataBase::connect();
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function readSobreById(){
            try {
                $sql = "SELECT * FROM sobre WHERE sob_id = 'lO23cOv23PC2ei4dJV829CWVvivi32'";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetch(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }

        public function updateSobreImg($imageName){
            try {
                $sql = "UPDATE sobre SET sob_ruta = ? WHERE sob_id = 'lO23cOv23PC2ei4dJV829CWVvivi32'";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($imageName));
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }
        
        public function updateSobre($data){
            try {
                $sql = "UPDATE sobre SET sob_frase = ?,sob_parrafo1 = ?, sob_parrafo2 = ? WHERE sob_id = 'lO23cOv23PC2ei4dJV829CWVvivi32'";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[0],$data[1],$data[2]));
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }
        public function __DESTRUCT(){
            DataBase::disconnect();
        }
    }
?>
