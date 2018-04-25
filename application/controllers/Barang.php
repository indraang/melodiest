<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
	function __construct(){
		parent::__construct();
      $this->load->library(array('template','form_validation','session'));
			$this->load->helper(array('url','file'));
			$this->load->model('madmin');
		}
 
	public function index()
	{
		$this->cek_login();
		$data['data'] = $this->madmin->get_all('t_barang');

		$this->template->admin('admin/tabel_barang',$data);
	}

	public function cek_login(){
			if(!$this->session->userdata('admin')){
				redirect('login');
			}
		}

  	public function Add_barang(){

		if ($this->input->post('submit',TRUE) == 'Submit'){
			//validasi
			$this->form_validation->set_rules('nama_brg','Nama Barang','required|min_length[4]');
			$this->form_validation->set_rules('harga_brg','Harga Barang','required|numeric');
			$this->form_validation->set_rules('berat_brg','Berat Barang','required|numeric');
			$this->form_validation->set_rules('status_brg','Status Barang','required|numeric');
			$this->form_validation->set_rules('jmlh_stok','Jumlah Stok','required|numeric');
			$this->form_validation->set_rules('ktrngn','Keterangan','required|min_length[5]');

			if($this->form_validation->run()== TRUE)
			{
				$config['upload_path']   = './assets/unggah';
      		 	$config['allowed_types'] = 'gif|jpg|png|ico';
        		$this->load->library('upload',$config);
        		$this->upload->initialize($config);

					$brg = array(
						'nama_brg' => $this->input->post('nama_brg', TRUE),
						'harga_brg' => $this->input->post('harga_brg', TRUE),
						'berat_brg' => $this->input->post('berat_brg', TRUE),
						'status_brg' => $this->input->post('status_brg', TRUE),
						'jmlh_stok' => $this->input->post('jmlh_stok', TRUE),
						'ktrngn' => $this->input->post('ktrngn', TRUE),
						);

						$this->madmin->insert('t_barang',$brg);
						
						$id_brg = $this->db->insert_id();
						$this->session->set_userdata(array('insert_id'=> $id_brg));
						
						redirect(site_url('barang/upload'));	

						
								
			}

	}
		$data['nama_brg'] = $this->input->post('nama_brg', TRUE);
		$data['harga_brg'] = $this->input->post('harga_brg',TRUE);
		$data['berat_brg'] = $this->input->post('berat_brg',TRUE);
		$data['status_brg'] = $this->input->post('status_brg',TRUE);
		$data['jmlh_stok'] = $this->input->post('jmlh_stok',TRUE);
		$data['ktrngn'] = $this->input->post('keterangan',TRUE);

		$data['header'] = "Tambah Barang";
		$this->template->admin('admin/form_barang',$data);

	}

	public function upload(){

        $config['upload_path']   = './assets/unggah';
        $config['allowed_types'] = 'gif|jpg|png|ico';
        $this->load->library('upload',$config);
        $this->upload->initialize($config);

        if($this->upload->do_upload('upload')){	
        	
        	$gambar = array(
        		'id_brg' => $this->session->userdata('insert_id'),
        		'nama_gbr' => $this->upload->data('file_name'),
        		'token' => $this->input->post('token_foto')

        	);
            	
        	$this->madmin->insert('t_gambar',$gambar);
    		redirect(site_url('barang'));

        }

        $this->template->admin('admin/form_upload');

	}

	
	public function detail_brg(){
		$id_brg = $this->uri->segment(3);
		$brg = $this->madmin->get_where('t_barang', array('id_brg' => $id_brg));

		foreach ($brg->result() as $brg)
			$data['id_brg'] = $brg->id_brg;
			$data['nama_brg'] = $brg->nama_brg;
			$data['harga_brg'] = $brg->harga_brg;  
			$data['kondisi_brg'] = $brg->kondisi_brg;
			$data['ktrsd_brg'] = $brg->ktrsd_brg;
			$data['jmlh_stok'] = $brg->jmlh_stok;
			$data['gbr_brg'] = $brg->gbr_brg;
			$data['ktrngn'] = $brg->ktrngn;


			$this->template->admin('admin/detail_brg',$data,$id_brg);
		}

		

	public function update_brg(){
			$id_brg = $this->uri->segment(3);
			if ($this->input->post('submit',TRUE) == 'Submit'){
				//validasi
				$this->form_validation->set_rules('nama_brg','Nama Barang','required|min_length[4]');
				$this->form_validation->set_rules('harga_brg','Harga','required|numeric');
				$this->form_validation->set_rules('kondisi_brg','Kondisi','required|min_length[4]');
				$this->form_validation->set_rules('ktrsd_brg','Ketersediaan','required|numeric');
				$this->form_validation->set_rules('jmlh_stok','Jumlah Stok','required|numeric');
				$this->form_validation->set_rules('ktrngn','Keterangan','required|min_length[5]');

				if($this->form_validation->run()== TRUE)
				{
					$config['upload_path'] = './assets/unggah';
					$config['allowed_types'] = 'jpg|png|jpeg';
					$config['max_size'] = '5048';
					$config['file_name'] = 'gambar'.time();

					$this->load->library('upload',$config);
					$brg = array(
							'nama_brg' => $this->input->post('nama_brg', TRUE),
							'harga_brg' => $this->input->post('harga_brg', TRUE),
							'kondisi_brg' => $this->input->post('kondisi_brg', TRUE),
							'ktrsd_brg' => $this->input->post('ktrsd_brg', TRUE),
							'jmlh_stok' => $this->input->post('jmlh_stok', TRUE),
							'ktrngn' => $this->input->post('ktrngn', TRUE),
						);

					//proses insert barang
					if($this->upload->do_upload('gambar')){
						$gbr = $this->upload->data();
						unlink('assets/unggah/'.$this->input->post('old_pict',TRUE));
						$brg['gbr_brg'] = $gbr['file_name'];
						$this->madmin->update('t_barang',$brg,array('id_brg' => $id_brg));
						redirect(site_url('barang'));
					}else{
						$this->madmin->update('t_barang',$brg,array('id_brg' => $id_brg));
						redirect(site_url('barang'));
					}
				}
			}
			$brg = $this->madmin->get_where('t_barang',array('id_brg' => $id_brg));
			foreach($brg->result() as $key){
				$data['nama_brg'] = $key->nama_brg;
				$data['harga_brg'] = $key->harga_brg;
				$data['kondisi_brg'] = $key->kondisi_brg;
				$data['ktrsd_brg'] = $key->ktrsd_brg;
				$data['jmlh_stok'] = $key->jmlh_stok;
				$data['ktrngn'] = $key->ktrngn;
				$data['gbr_brg'] = $key->gbr_brg;
			}


			$data['header'] = "Update Barang";
			$this->template->admin('admin/form_barang',$data);

		}

		}
