<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ProductModel extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function SaveProduct($CodActivo,$Nom,$TipoActivo,$Conf,$Inte,$Disp,$Valoracion_Activo,$Num_Val_Ac){
		$SQL=<<<FIN
		INSERT INTO activo VALUES('$CodActivo','$Nom','$TipoActivo','$Conf','$Inte','$Disp','$Valoracion_Activo','$Num_Val_Ac','S')
FIN;
		try{
			$this->db->query($SQL);
			return "1";
		}catch(Exception $e){
			return $e.getMEnsaje();
		}
	}

}