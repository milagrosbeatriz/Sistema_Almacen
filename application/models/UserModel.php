<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class UserModel extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	public function SaveUser($Id_Usu_Usuario = null, $Id_TipUsuario = null, $Usu_Nombres = null, $Usu_Apellidos = null, $Usu_Dni = null, $Usu_Telefono = null, $Usu_Usuario = null,
	  $Usu_Clave = null){
      $data = array(
      	
        'Id_Usu_Usuario' => $Id_Usu_Usuario,
        'Id_TipUsuario' => $Id_TipUsuario,
        'Usu_Nombres' => $Usu_Nombres,
        'Usu_Apellidos' => $Usu_Apellidos,
        'Usu_Dni' => $Usu_Dni,
        'Usu_Telefono' => $Usu_Telefono,
        'Usu_Usuario' => $Usu_Usuario,
        'Usu_Clave' => $Usu_Clave
      );
      
      if($id){
         $this->db->where('Id_Usu_Usuario', $Id_Usu_Usuario);
         $this->db->update('usuario', $data);
      }else{
         $this->db->insert('usuario', $data);
      } 
   }

	function SaveUser($Id_TipUsuario,Usu_Nombres,$Usu_Apellidos,$Usu_Dni,$Usu_Telefono,$Usu_Usuario,$Usu_Clave){
		$SQL=<<<FIN
		INSERT INTO usuario VALUES('$Id_TipUsuario','$Usu_Nombres','$Usu_Apellidos','$Usu_Dni','$Usu_Telefono','$Usu_Usuario','$Usu_Clave')
FIN;
		try{
			$this->db->query($SQL);
			return "1";
		}catch(Exception $e){
			return $e.getMEnsaje();
		}
	}

}