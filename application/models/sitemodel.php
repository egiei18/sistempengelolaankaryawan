<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemodel extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct() {
		parent::__construct();
		$this->load->library('fungsi');
	}

 	public function getKaryawan(){
  		$this->db->from("tabel_karyawan");
		$this->db->order_by("FullName", "ASC");
		$query = $this->db->get(); 
		return $query->result();
 	}


 	public function getDriver(){
  		$this->db->from("driver");
		$this->db->order_by("namaDriver", "ASC");
		$query = $this->db->get(); 
		return $query->result();
 	}

 	public function count_all($table="")
    {
    	return $this->db->count_all($table);
    }

	public function count_karyawan_wanita()
    {
    	return $this->db->where('gender','Perempuan')->get('tabel_karyawan')->num_rows();
	}
	
	public function count_karyawan_pria()
    {
    	return $this->db->where('gender','Laki-laki')->get('tabel_karyawan')->num_rows();
    }
 	

	

	


}
