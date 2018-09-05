<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modeleitor extends CI_Model {
	public function __construct()	{
  		$this->load->database('tienda'); 
	}

	
	public function get_prod($data){
		
		$this->load->database('tienda'); 
		$mysql= "SELECT descripcionProducto FROM producto as P , tipoproducto as TP WHERE P.idComprador=? AND P.idTipoProducto=TP.idTipoProducto";
		$query = $this->db->query($mysql,$data['idComprador']);
		
		  	      return $query->result();
		
}	
public function get_vend($data){
		
		$this->load->database('tienda'); 
		$mysql= "SELECT MAX(precioCompra) as precio,nombreComprador FROM producto as P, comprador as C WHERE P.idComprador=C.idComprador AND P.numeroVendedor=?";
		$query = $this->db->query($mysql,$data['numeroVendedor']);
		
		  	      return $query->result();
		
}
	public function get_vendedores(){	

		$sql= "SELECT * FROM vendedor";
		$query = $this->db->query($sql);

  		  // si hay resultados
  		 if ($query->num_rows() > 0) {
  	      // almacenamos en una matriz bidimensional
		        foreach($query->result() as $row)
  			         $arrDatos[htmlspecialchars($row->numeroVendedor, ENT_QUOTES)]=htmlspecialchars($row->nombreVendedor, ENT_QUOTES);

         $query->free_result();
      
      return $arrDatos;

	}	
}

	public function get_compradores(){	

		$sql= "SELECT * FROM comprador";
		$query = $this->db->query($sql);

  		  // si hay resultados
  		 if ($query->num_rows() > 0) {
  	      // almacenamos en una matriz bidimensional
		        foreach($query->result() as $row)
  			         $arrDatos[htmlspecialchars($row->idComprador, ENT_QUOTES)]=htmlspecialchars($row->nombreComprador, ENT_QUOTES);

         $query->free_result();
      
      return $arrDatos;

	}	
}


}
?>