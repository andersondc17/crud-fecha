<?php
	/*-------------------------
	Autor: Obed Alvarado
	Web: obedalvarado.pw
	Mail: info@obedalvarado.pw
	---------------------------*/
	class Database{
		private $con;
		private $dbhost="localhost";
		private $dbuser="root";
		private $dbpass="";
		private $dbname="futbol";
		function __construct(){
			$this->connect_db();
        }
        
		public function connect_db(){
      $this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
      $this->con -> set_charset("utf8");
			if(mysqli_connect_error()){
				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
			}
        }
        

        public function sanitize($var){
            $return = mysqli_real_escape_string($this->con, $var);
            return $return;
          }
        
          public function create($nombre,$fecha,$parrafo,$img,$enlace,$estado){
            $sql = "INSERT INTO `tb_jugador` (nombre, fecha, parrafo, img, enlace, estado) VALUES ('$nombre', '$fecha', '$parrafo', '$img', '$enlace', '$estado')";
            $res = mysqli_query($this->con, $sql);
            if($res){
              return true;
            }else{
            return false;
         }
        }
        
        
        public function read(){
        $sql = "SELECT * FROM tb_jugador";
        $res = mysqli_query($this->con, $sql);
        return $res;
        }

        public function newread(){
          $sql = "SELECT * FROM tb_jugador where fecha > now();";
          $res = mysqli_query($this->con, $sql);
          return $res;
          }


        public function single_record($id){
			$sql = "SELECT * FROM tb_jugador where id='$id'";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_object($res );
			return $return ;
		}
		public function update($nombre,$fecha,$parrafo,$img,$enlace,$estado, $id){
			$sql = "UPDATE tb_jugador SET nombre='$nombre', fecha='$fecha', parrafo='$parrafo', img='$img', enlace='$enlace', estado='$estado' WHERE id=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
        }
        

        public function delete($id){
            $sql = "DELETE FROM tb_jugador WHERE id=$id";
            $res = mysqli_query($this->con, $sql);
            if($res){
            return true;
            }else{
            return false;
            }
            }
        
}




?>