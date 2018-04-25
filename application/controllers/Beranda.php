<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->helper('url');
		$this->load->library('template');
		$this->load->model('content');
		}
		 
		
	public function index(){
		
		$data['tb'] = $this->content->get_all();
		$this->template->index('beranda',$data);
		
	}
 
	public function detail($id){
		$data['show'] = $this->content->get_where($id);
		if(empty($data['show'])){
			show_404();
		}else{

			$this->template->detail('detail_brg',$data);
			
		}
		
	}

		
}

	
/*
if (is_numeric($this->uri->segment(3))){

			$id = $this->uri->segment(3);
			$data['t_barang'] = $this->content->get_where();
			$this->template->detail('detail_brg',$data);
		}else{
			redirect('beranda');
		}

*/

