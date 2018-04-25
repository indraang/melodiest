<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->helper('url');
		$this->load->library(array('template','form_validation'));
		$this->load->model('madmin');
		}
		
		
		public function index(){
		$this->cek_login();
		$this->template->admin('admin/beranda');
		}
		public function update_profil(){

			$this->cek_login();
			
			if($this->input->post('submit',TRUE)=='Submit'){

				$this->form_validation->set_rules('username','Username','required|trim|min_length[3]');
				$this->form_validation->set_rules('fullname','Fullname',"required|trim|min_length[3]|regex_match[/^[a-z A-Z,']+$/]");
				$this->form_validation->set_rules('email','Email','required|trim|valid_email');
				$this->form_validation->set_rules('password','Password','required');
				$this->form_validation->set_rules('password2','Password','required|matches[password]');
				if($this->form_validation->run()==TRUE){
					$get_data = $this->madmin->get_where('t_admin',array('id_admin' => $this->session->userdata('admin')))->row();
					if(!password_verify($this->input->post('password',TRUE),$get_data->password)){

						echo '<script type="text/javascript">alert("Password yang anda masukkan salah");window.location.replace("'.base_url().'login/logout")</script>';
					}else{
						$data = array(
						'username' => $this->input->post('username',TRUE),
						'fullname' => $this->input->post('fullname',TRUE),
						'email' => $this->input->post('email',TRUE),
					);
					$con = array('id_admin' => $this->session->userdata('admin'));

					$this->madmin->update('t_admin',$data,$con);
					}
					
				}
			}

			$get = $this->madmin->get_where('t_admin',array('id_admin' => $this->session->userdata('admin')))->row();

			$data['username'] = $get->username;
			$data[ 'fullname'] = $get->fullname;
			$data['email'] = $get->email; 


			$this->template->admin('admin/edit_profil',$data);
		}

		public function update_password(){
			$this->cek_login();

			if($this->input->post('submit',TRUE)=='Submit'){

				$this->form_validation->set_rules('password2','Password Lama','required');
				$this->form_validation->set_rules('password1','Password Baru','required');
				
				if($this->form_validation->run()==TRUE){

					$get_data = $this->madmin->get_where('t_admin',array('id_admin' => $this->session->userdata('admin')))->row();
					if(!password_verify($this->input->post('password2',TRUE),$get_data->password)){

						echo '<script type="text/javascript">alert("Password lama yang anda masukkan salah");window.location.replace("'.base_url().'login/logout")</script>';
					}else{
						$psw = $this->input->post('password1',TRUE);
						$data['password'] = password_hash($psw,PASSWORD_DEFAULT,['cost' => 10]);
					$con = array('id_admin' => $this->session->userdata('admin'));

					$this->madmin->update('t_admin',$data,$con);
					
					redirect('login/logout');
					}
				}
			}
			$this->template->admin("admin/update_psw");
		}

		public function cek_login(){
			if(!$this->session->userdata('admin')){
				redirect('login');
			}
		}
}

	


