<?php 
	class JrasesoresModel extends Mysql{
		public $intIdCupo;
		public $intIdAsesor;
		public $intAnio;
		public $intSemana;
		public $intMes;
		public $intDia;
		public $intBloque;
		public $intSub_bloque;
		private $strCotizacion;
		private $strFecha;
	    /* */
		public $intCupo_asesor_id;
		public $strNombre_asesor;
		private $intTipo_transporte;
		public $strTipo_Carga;

		public function __construct(){
			parent::__construct();
		}

		 /*mostrar nombre de asesor*/
		 public function selectNombresPersona(){
			$sql = "SELECT * FROM persona WHERE status !=0 AND idpersona != 1 ORDER BY nombres";
			$request = $this->select_all($sql);
			return $request;
		}

		/* ---------------------------------------------------------------------------------------------------------- */

		/*Cantidad de cupos por bloque*/
		public function select_Cupos(int $anio, int $semana, int $dia, int $bloque){
			$this->intAnio = $anio;
			$this->intSemana = $semana;
			$this->intDia = $dia;
			$this->intBloque = $bloque;
			$sql = "SELECT COUNT(*) as total FROM `cupos_rastras` WHERE tipo_transporte=2 AND anio=$this->intAnio AND semana=$this->intSemana AND dia=$this->intDia AND bloque=$this->intBloque";
			$request = $this->select($sql);
			$total = $request['total']; 
			return $total;
		}
		/* sub_bloque o cupos */
		public function select_SubBloque_Cupos(int $anio, int $semana, int $dia, int $bloque){
			$this->intAnio = $anio;
			$this->intSemana = $semana;
			$this->intDia = $dia;
			$this->intBloque = $bloque;
			$sql = "SELECT sub_bloque FROM `cupos_rastras` WHERE tipo_transporte=2 AND anio=$this->intAnio AND semana=$this->intSemana AND dia=$this->intDia AND bloque=$this->intBloque";
			$request = $this->select_all($sql);
			return $request;
		}
		/* seleccionar el id de asesor en [cupo_asesor] para mandarlo por onclick*/
		public function select_DatosCupos(int $anio, int $semana, int $dia, int $bloque, int $sub_bloque){
			$this->intAnio = $anio;
			$this->intSemana = $semana;
			$this->intDia = $dia;
			$this->intBloque = $bloque;
			$this->intSub_bloque = $sub_bloque;
			$sql = "SELECT id_cupo, nombre_asesor, tipo_carga FROM `cupos_rastras`
					WHERE tipo_transporte=2 AND anio=$this->intAnio AND semana=$this->intSemana AND dia=$this->intDia AND bloque=$this->intBloque AND sub_bloque = $this->intSub_bloque";
			$request = $this->select($sql);
			return $request;
		}

		/* ---------------------------------------------------------------------------------------------------------- */	
		/* ---------------------------------------------------------------------------------------------------------- */	
    						
		/* actualizar asesor*/
		public function update_Asesor_Cupo(int $idcupo, string $nombre_asesor){
			$this->intIdCupo = $idcupo;
			$this->strNombre_asesor = $nombre_asesor;
			$sql = "UPDATE cupos_rastras SET nombre_asesor=? WHERE id_cupo=$this->intIdCupo";
			$arrData = array($this->strNombre_asesor);
			$request = $this->update($sql,$arrData);
			return $request;
		}

		/* actualizar tipoCarga*/
		public function update_tipoCarga(int $idcupo, string $tipo_carga){
			$this->intIdCupo = $idcupo;
			$this->strTipo_Carga = $tipo_carga;
			$sql = "UPDATE cupos_rastras SET tipo_carga=? WHERE tipo_transporte=2 AND id_cupo = $this->intIdCupo";
			$arrData = array($this->strTipo_Carga);
			$request = $this->update($sql,$arrData);
			return $request;
		}

		/*eliminar cupo individual*/
		public function deleteCupo(int $idcupo){
			$this->intIdCupo = $idcupo;
			$sql = "DELETE FROM cupos_rastras WHERE tipo_transporte=2 AND id_cupo = $this->intIdCupo";
			$request = $this->delete($sql);
			return $request;
		}

		/* ---------------------------------------------------------------------------------------------------------- */
		/* ---------------------------------------------------------------------------------------------------------- */
		
		/* - NUEVO CUPO - */

		/* buscar el ultimo cupo */
		public function select_UltimoCupo(int $anio, int $semana, int $dia, int $bloque){
			$this->intAnio = $anio;
			$this->intSemana = $semana;
			$this->intDia = $dia;
			$this->intBloque = $bloque;
			$sql = "SELECT MAX(sub_bloque) as ultimoCupo FROM cupos_rastras WHERE tipo_transporte=2 AND anio=$this->intAnio AND semana=$this->intSemana AND dia=$this->intDia AND bloque=$this->intBloque ORDER BY sub_bloque DESC";
			$request = $this->select($sql);
			$ultimoCupo = $request['ultimoCupo']; 
			return $ultimoCupo;
		}
		/* ingresar nuevo cupo */
		public function inserCupos(int $tipo_transporte, int $anio, int $mes, int $semana, int $dia, int $bloque, int $sub_bloque, string $nombre_asesor, string $cotizacion, string $fecha){
			$this->intTipo_transporte = $tipo_transporte;
			$this->intAnio = $anio;
			$this->intMes = $mes;
			$this->intSemana = $semana;
			$this->intDia = $dia;
			$this->intBloque = $bloque;
			$this->intSub_bloque = $sub_bloque;
			$this->strCotizacion = $cotizacion;
			$this->strNombre_asesor = $nombre_asesor;
			$this->strFecha = $fecha;
			$query_insert  = "INSERT INTO cupos_rastras(tipo_transporte,anio,mes,semana,dia,bloque,sub_bloque,nombre_asesor, cotizacion,fecha) VALUES(?,?,?,?,?,?,?,?,?,?)";
			$arrData = array($this->intTipo_transporte,$this->intAnio,$this->intMes,$this->intSemana,$this->intDia,$this->intBloque,$this->intSub_bloque,$this->strNombre_asesor,$this->strCotizacion,$this->strFecha);
			$request_insert = $this->insert($query_insert,$arrData);
			$return = $request_insert;
			return $return;	
		}
		
	}

?>
