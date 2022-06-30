<?php 

	class RolesModel extends Mysql
	{
		public $intIdrol;
		public $strRol;
		public $strDescripcion;
		public $intStatus;

		public function __construct(){
			parent::__construct();
		}

		public function selectRoles(){
			//EXTRAE ROLES
			$sql = "SELECT * FROM rol WHERE idrol != 0 ORDER BY nombrerol";
			$request = $this->select_all($sql);
			return $request;
		}

		public function selectRol(int $idrol){
			//BUSCAR ROLE
			$this->intIdrol = $idrol;
			$sql = "SELECT * FROM rol WHERE idrol = $this->intIdrol";
			$request = $this->select($sql);
			return $request;
		}

		public function insertRol(string $rol, string $descripcion){
			$return = "";
			$this->strRol = $rol;
			$this->strDescripcion = $descripcion;

			$sql = "SELECT * FROM rol WHERE nombrerol = '{$this->strRol}' ";
			$request = $this->select_all($sql);

			if(empty($request)){
				$query_insert  = "INSERT INTO rol(nombrerol,descripcion) VALUES(?,?)";
	        	$arrData = array($this->strRol, $this->strDescripcion);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
			}else{
				$return = "exist";
			}
			return $return;
		}	

		public function updateRol(int $idrol, string $rol, string $descripcion){
			$this->intIdrol = $idrol;
			$this->strRol = $rol;
			$this->strDescripcion = $descripcion;

			$sql = "SELECT * FROM rol WHERE nombrerol = '$this->strRol' AND idrol != $this->intIdrol";
			$request = $this->select_all($sql);

			if(empty($request)){
				$sql = "UPDATE rol SET nombrerol = ?, descripcion = ? WHERE idrol = $this->intIdrol ";
				$arrData = array($this->strRol, $this->strDescripcion);
				$request = $this->update($sql,$arrData);
			}else{
				$request = "exist";
			}
		    return $request;			
		} 

		public function deleteRol(int $idrol){
			$this->intIdrol = $idrol;
			$sql = "SELECT * FROM persona WHERE rolid = $this->intIdrol";
			$request = $this->select_all($sql);
			if(empty($request)){
				$sql = "DELETE FROM rol WHERE idrol = $this->intIdrol";
				$request = $this->delete($sql);
				if($request){
					$request = 'ok';	
				}else{
					$request = 'error';
				}
			}else{
				$request = 'exist';
			}
			return $request;
		}
	}
?>