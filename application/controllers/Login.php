<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('madmin');
	
	}
 
	public function index()
	{
		// echo password_hash('septiana123',PASSWORD_DEFAULT,['cost' => 10]);
		
		if($this->input->post('submit') == 'Submit'){
			$usr = $this->input->post('username',TRUE);
			$psw = $this->input->post('password',TRUE);
 	
 			$cek = $this->madmin->get_where('t_admin',array('username' => $usr));
 			if($cek->num_rows() > 0){
 				$data = $cek->row();
 				if(password_verify($psw,$data->password)){
 					$datausr = array(
 						'admin' => $data->id_admin,
 						'user' => $data->fullname,
 						'level' => $data->level,
 						'login' => TRUE
 					);	
 					$this->session->set_userdata($datausr);
 					redirect('administrator');
 				}else{
 					$this->session->set_flashdata('alert',"Password yang anda masukkan salah");
 				}
 			}else{
 				$this->session->set_flashdata('alert',"Username tidak ditemukan"); 
 			}
 		}
 		if($this->session->userdata('login')== TRUE){
 		  	redirect('administrator');
 		}
 		$this->load->view('admin/login');

	}
	public function logout(){
			$this->session->sess_destroy();
			redirect('login');
		}


}