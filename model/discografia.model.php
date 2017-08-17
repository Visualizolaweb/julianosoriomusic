<?php
    class DiscografiaModel extends DataBase{
        private $pdo;
        function __CONSTRUCT(){
            try {
                $this->pdo = DataBase::connect();
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function createDiscografia($data){
            try {
                $sql = "INSERT INTO discografia VALUES (?,?,?,?,?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[2],$data[0],$data[1],$data[3],$data[4],$data[5]));
                $result = "Datos ingresados correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }

        public function readDiscografia(){
            try {
                $sql = "SELECT * FROM discografia  WHERE dis_estado = 'Activo' ORDER BY dis_num ASC";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }

        public function readDiscografiaById($field){
            try {
                $sql = "SELECT * FROM discografia WHERE dis_id = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($field));
                $result = $query->fetch(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }

        public function updateDiscografia($field){
            try {
                $sql = "UPDATE discografia SET dis_estado = 'Inactivo' WHERE dis_id = ?";
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
