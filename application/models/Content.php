<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Model {
	function __construct(){
		parent::__construct();

	} 

	function insert($table='',$data='')
	{
		$this->db->insert($table,$data);
	}

	function get_all(){
		$this->db->select('tb.id_brg,tb.nama_brg,tb.harga_brg,tb.berat_brg,tb.status_brg,tb.jmlh_stok,tb.ktrngn,img.id_img,img.nama_gbr AS gambar');
		$this->db->from('t_barang AS tb');
		$this->db->join('t_gambar AS img','tb.id_brg = img.id_brg','left');
		$this->db->group_by('img.id_brg');
		
		$data = $this->db->get();
		return $data->result();
	}
	
	function get_where($id){
		$this->db->select("tb.*,GROUP_CONCAT(t_gambar.nama_gbr) as gambar",false);
		$this->db->from('t_barang as tb');
		$this->db->join('t_gambar','t_gambar.id_brg = tb.id_brg','left');
		if($id){
			$this->db->where('tb.id_brg',$id);
		}
		$this->db->group_by('tb.id_brg');
		$query = $this->db->get();
		return $query->row_array();
	}
	function update($table = null, $data = null,$where = null){
		$this->db->update($table,$data,$where);
	}
}

/* $this->db->distinct();
$this->db->select('data yang diselect');
$this->db->where();
$this->db->get();

Kurang lebih gitu silahkan modifikasi sesuai kebutuhan 
$this->db->distinct();
$this->db->select ('reference_id');
$this->db->from('wall_posts AS p');
$this->db->join('users AS k', 'p.wall_poster = k.user_id AND p.wall_owner = k.user_id', 'left');
$this->db->group_by('p.wall_id');
$this->db->where('p.wall_poster', $pid); // $pid = given user id
$this->db->or_where('p.wall_owner', $pid);
$this->db->order_by('p.wall_id', 'desc');


*/