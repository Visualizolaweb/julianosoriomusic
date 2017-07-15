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
                $sql = "INSERT INTO discografia VALUES (?,?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[2],$data[0],$data[1]));
                $result = "Datos ingresados correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }

        public function readDiscografia(){
            try {
                $sql = "SELECT * FROM discografia";
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

        public function updateUser($data){
            try {
                $sql = "UPDATE user SET user_name = ?, user_email = ? WHERE user_code = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[2],$data[0],$data[1]));
                $result = "Datos actualizados correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }

        public function deleteDiscografia($field){
            try {
                $sql = "DELETE FROM discografia WHERE dis_id = ?";
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
