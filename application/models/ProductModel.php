<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ProductModel extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	public function SaveProduct($Id_Pro_Producto = null, $Id_Lin_Linea = null, $Id_Pro_Proveedor = null, $Id_Usu_Usuario = null, $Pro_Nombre = null, $Pro_Presentacion = null, $Pro_Medida = null,
	  $Pro_Poder = null, $Pro_Tipo = null, $Pro_Constante = null, $Pro_Numpiesas = null, $Pro_Stock = null, $Pro_Marca = null, $Pro_Laboratorio = null, $Pro_Lote = null, $Pro_Registrosanitario = null,
	  $Pro_Fecharegistro = null, $Pro_Fechacompra = null, $Pro_Fechavencimiento = null, $Pro_Preciocompra = null, $Pro_Precioventa = null){
      $data = array(
      	'Id_Pro_Producto' = $Id_Pro_Producto,
        'Id_Lin_Linea' => $Id_Lin_Linea,
        'Id_Pro_Proveedor' => $Id_Pro_Proveedor,
        'Id_Usu_Usuario' => $Id_Usu_Usuario,
        'Pro_Nombre' => $Pro_Nombre,
        'Pro_Presentacion' => $Pro_Presentacion,
        'Pro_Medida' => $Pro_Medida,
        'Pro_Poder' => $Pro_Poder,
        'Pro_Tipo' => $Pro_Tipo,
        'Pro_Constante' => $Pro_Constante,
        'Pro_Numpiesas' => $Pro_Numpiesas,
        'Pro_Stock' => $Pro_Stock,
        'Pro_Marca' => $Pro_Marca,
        'Pro_Laboratorio' => $Pro_Laboratorio,
        'Pro_Lote' => $Pro_Lote,
        'Pro_Registrosanitario' => $Pro_Registrosanitario,
        'Pro_Fecharegistro' => $Pro_Fecharegistro,
        'Pro_Fechacompra' => $Pro_Fechacompra,
        'Pro_Fechavencimiento' => $Pro_Fechavencimiento,
        'Pro_Preciocompra' => $Pro_Preciocompra,
        'Pro_Precioventa' => $Pro_Precioventa
      );
      
      if($id){
         $this->db->where('Id_Pro_Producto', $Id_Pro_Producto);
         $this->db->update('informes', $data);
      }else{
         $this->db->insert('informes', $data);
      } 
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