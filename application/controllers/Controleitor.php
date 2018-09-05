<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Controleitor extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Modeleitor');
	}
	public function index(){
			$this->load->model('Modeleitor');
		
			$datos['arrContenido'] = $this->Modeleitor->get_compradores();
			$datos['arrVendor'] = $this->Modeleitor->get_vendedores();

    		$this->load->view('welcome_message', $datos);
	}	


	public function show($id) {
	    $this->load->model('Modeleitor');
	    $data['nombreComprador'] = $this->Modeleitor->get_news($id);
	  
	    $this->load->view('show',$data);
	}

	public function get_comp(){
		$data=array(
				'idComprador'=>$this->input->post('idComprador')
			);

		$datos['articulos'] = $this->Modeleitor->get_prod($data);

	    $this->load->view('show',$datos);
		

	}
	public function get_vend(){
		$data=array(
				'numeroVendedor'=>$this->input->post('numeroVendedor')
			);

		$datos['vendor'] = $this->Modeleitor->get_vend($data);

	    $this->load->view('show2',$datos);
		

	}
}

?>