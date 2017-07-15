<?php
    class ContactameModel extends DataBase{
        private $pdo;
        function __CONSTRUCT(){
            try {
                $this->pdo = DataBase::connect();
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }
        public function readContactoById(){
            try {
                $sql = "SELECT * FROM contacto WHERE con_id = 'AeU839Cekf02Cw9fEcoe293c0vD2D1'";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetch(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }
        public function updateContacto($data){
            try {
                $sql = "UPDATE contacto SET con_email = ?, con_telefono = ? WHERE con_id = 'AeU839Cekf02Cw9fEcoe293c0vD2D1'";
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
