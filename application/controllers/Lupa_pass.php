<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lupa_Pass extends CI_Controller {
	function __construct(){
		parent::__construct();
            $this->load->library('form_validation','email');
			$this->load->model('madmin');
		}

	public function index()
	{
		if($this->input->post('simpan',TRUE)=='Simpan'){
			$this->form_validation->set_rules('email','E-mail','required|valid_email');
			if($this->form_validation->run()==TRUE){
				$get = $this->madmin->get_where('t_admin',array('email'=>$this->input->post('email',TRUE)));
				
				if($get->num_rows() > 0){
					$this->load->library('email');
					
					$config['charset'] = 'utf-8';
					$config['useragent'] = 'Indradev';
					$config['protocol'] = 'smtp';
					$config['mailtype'] = 'html';
					$config['smtp_host'] = 'ssl://smtp.googlemail.com';
					$config['smtp_port'] = '465';
					$config['smtp_timeout'] = '5';
					$config['smtp_user'] = 'fansmirage@gmail.com';
					$config['smtp_pass'] = 'Shafaq123';
					$config['crlf'] = "\r\n";
					$config['newline'] = "\r\n";
					$config['wordwrap'] = TRUE;

					$this->email->initialize($config);

					$key = md5(md5(time()));
					$this->email->from('fansmirage@gmail.com',"Indradev");
					$this->email->to($this->input->post('email',TRUE));
					$this->email->subject('Reset Password');
					$this->email->message(
						'Silahkan klik tombol reset untuk mereset sandi anda <a href="'.site_url().'lupa_pass/reset/'.$key.'">RESET</a>'

					);
					
					if($this->email->send()){
						$data['reset'] = $key;
						$cond['email'] = $this->input->post('email',TRUE);
						$this->madmin->update('t_admin',$data,$cond);

						$this->session->set_flashdata('success','email berhasil dikirim,silahkan cek email anda');
					}else{
						$this->session->set_flashdata('alert','email gagal dikirim'); 
					}

				}else{
					$this->session->set_flashdata('alert','email yang anda masukkan tidak terdaftar');	
				}
			}
		}
		$this->load->view("lupa_pass");

	}

	public function reset(){

		if($this->uri->segment(3)){

			$this->load->view('form_reset');

			if($this->input->post('simpan',TRUE)== 'Simpan'){
 
				$this->form_validation->set_rules('psw1','Password Baru','required|min_length[5]');
				$this->form_validation->set_rules('psw2','Ketik Ulang','required|matches[psw1]');
				if($this->form_validation->run()==TRUE){
					$pass = $this->input->post('psw2',TRUE);
					$data['password'] = password_hash($pass,PASSWORD_DEFAULT,['cost' => 10]);
					$data['reset'] = '';

					$cond['reset'] = $this->uri->segment(3);

					$this->madmin->update('t_admin',$data,$cond);

					$this->session->set_flashdata('success',"Password berhasil diganti"); 

					redirect('login');

				}
			}
			

		}else{
			redirect('lupa_pass');
		}
	}
}

 