<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AutogenerateModel extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	function Generar_Codigo($ini,$cod,$tab){
		$ad=date('Ym');
		$SQL="select Max(Substring($cod,11,6)) as cod  from $tab";
		$Sig=0;
		$Consulta=$this->db->query($SQL);
		$aux=$Consulta->result_array();
		$result;
		foreach ($aux as $res) {
			$result=$res;
		}
		if($result['cod']==null){
			$sig=1;
		}else{
			$sig=(int)$result['cod']+1;
		}
		$fin="";
		$relleno="";
		$rp=6-strlen($sig);

		for($i=0;$i<$rp;$i++){
			$relleno.="0";
		}
		$fin=$relleno."".$sig;
		return $ini.$ad.$fin;
	}
}
?>
