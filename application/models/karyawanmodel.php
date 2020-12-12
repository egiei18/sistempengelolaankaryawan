<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawanmodel extends CI_Model {

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

	function GetKaryawan() {
        return $this->db->get('tabel_karyawan')->result();
	}
	
	function GetPrint($id) {
        return $this->db->where('id',$id)->get('tabel_karyawan')->row();
    }

    function GetData($id) {
    	//return $this->db->where('idmerk', $id)->get('merk')->result_array();
    	//echo "ID:".$id;
    	//$id = $this->uri->segment(3);
    	$id = $this->uri->segment(3);
    	return $this->db->get_where('tabel_karyawan', array('id'=> $id))->row();
    }

    function getLastId()
	{
		return $this->db->select('MAX(id) as id')
		->get('tabel_karyawan')
		->row()->id;
	}

 	/*public function insert()
	{
		
		$namasupir 	= $this->input->post('namaDriver');
		$tgllahir 	= $this->input->post('ktp');

		$input = array (
		    'namasupir' 	=> $namasupir,
		    'ktp' 		=> $ktp,
		);

		return $this->db->insert('driver', $input);
	}*/

	public function delete($param) {
		return $this->db->delete('tabel_karyawan', array('id' => $param));
	}

	public function detail_data($id = NULL) {
		$query = $this->db->get_where('tabel_karyawan', array('id' => $id))->row();
		return $query;
	}

}
