<?php
    class EventosModel extends DataBase{
        private $pdo;
        function __CONSTRUCT(){
            try {
                $this->pdo = DataBase::connect();
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function updateImagen($id,$imageName){
            try {
                $sql = "UPDATE eventos_imagen SET evi_ruta = ? WHERE evi_id = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array($imageName,$id));
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }
        public function readImagenById($id){
          try {
            $sql = "SELECT * FROM eventos_imagen WHERE evi_id = ?";
            $query = $this->pdo->prepare($sql);
            $query->execute(array($id));
            $result = $query->fetch(PDO::FETCH_BOTH);
          } catch (PDOException $e) {
            die($e->getMessage()."".$e->getLine()."".$e->getFile());
          }
          return $result;
        }

        public function readEventsByCode($data){
            try {
              $sql = "SELECT * FROM eventos WHERE evento_code = ?";
              $query = $this->pdo->prepare($sql);
              $query->execute(array($data));
              $result = $query->fetch(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
              die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }

        public function createEvents($data){
            try {
                $sql = "INSERT INTO eventos VALUES (?,?,?,?,?,?,?,?)";
                $query = $this->pdo->prepare($sql);
                $query->execute(array(
                            $data[7],$data[0],$data[6],$data[1],$data[2],$data[3],$data[4],$data[5]
                                ));
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
        }

        public function readEvents(){
            try {
                $sql = "SELECT * FROM eventos ORDER BY evento_nombre";
                $query = $this->pdo->prepare($sql);
                $query->execute();
                $result = $query->fetchALL(PDO::FETCH_BOTH);
            } catch (PDOException $e) {
                die($e->getMessage()."".$e->getLine()."".$e->getFile());
            }
            return $result;
        }

        public function updateEvents($data){
            try {
                $sql = "UPDATE eventos SET
                        evento_nombre = ?,
                        evento_descripcion = ?,
                        evento_direccion = ?,
                        evento_fecha_inicio = ?,
                        evento_hora_inicio = ?,
                        evento_fecha_fin = ?,
                        evento_hora_fin = ?
                        WHERE evento_code = ?";
                $query = $this->pdo->prepare($sql);
                $query->execute(array(
                $data[0],$data[6],$data[1],$data[2],$data[3],$data[4],$data[5],$data[7]));
                $result = "Datos actualizados correctamente";
            } catch (PDOException $e) {
                die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
            }
            return $result;
        }

        public function deleteEvent($field){
          try {
            $sql="DELETE FROM eventos WHERE evento_code = ?";
            $query = $this->pdo->prepare($sql);
            $query->execute(array($field));
          } catch (PDOException $e) {
            die($e->getMessage()." ".$e->getLine()." ".$e->getFile());
          }
        }

        public function __DESTRUCT(){
            DataBase::disconnect();
        }
    }
?>
