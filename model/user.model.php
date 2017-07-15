<?php
    class UserModel extends DataBase{
        private $pdo;
        function __CONSTRUCT(){
            try {
                $this->pdo = DataBase::connect();
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        /*public function createUser(){
            try {
                $data[0]=randomAlpha('30');
                $data[1]="Julian Osorio";
                $data[2]="manager@julianosoriomusic";
                $data[3]="julianosorio123";
                $data[3]=password_hash($data[3],PASSWORD_DEFAULT);
                $sql = "INSERT INTO usuario VALUES (?,?,?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[0],$data[1],$data[2],$data[3]));
                $result = "Datos ingresados correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }*/

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
                $sql = "SELECT * FROM usuario WHERE usu_email = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[0]));
                $result = $query->fetch(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }

        public function updateUser($data){
            try {
                $sql = "UPDATE usuario SET usu_email = ?,usu_password = ? WHERE usu_id = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($data[0],$data[1],$data[3]));
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
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
