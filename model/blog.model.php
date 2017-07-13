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

        public function createUser($data){
            try {
                $sql = "INSERT INTO user VALUES (?,?,?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[3],$data[0],$data[1],$data[2]));
                $result = "Datos ingresados correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }

        public function readUser(){
            try {
                $sql = "SELECT * FROM user";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }

        public function readUserByCode($data){
            try {
                $sql = "SELECT * FROM user WHERE user_code = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data));
                $result = $query->fetch(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }

        public function readUserByEmail($data){
            try {
                $sql = "SELECT * FROM user WHERE user_email = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data));
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

        public function deleteUser($data){
            try {
                $sql = "DELETE FROM user WHERE user_code = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data));
                $result = "Datos eliminados correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }
        public function __DESTRUCT(){
            DataBase::disconnect();
        }
    }
?>
