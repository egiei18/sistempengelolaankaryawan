<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Historymodel extends CI_Model {

    function __construct() {
		parent::__construct();
		$this->load->library('fungsi');
	}

    function GetHistory() {
        return $this->db->get('upraisal_log')->result();
    }

    function GetData($id) {
    	//return $this->db->where('idmerk', $id)->get('merk')->result_array();
    	//echo "ID:".$id;
    	//$id = $this->uri->segment(3);
    	$id = $this->uri->segment(3);
    	return $this->db->get_where('upraisal_log', array('id'=> $id))->row();
    }

    function getLastId()
	{
		return $this->db->select('MAX(id) as id')
		->get('upraisal_log')
		->row()->id;
    }
    
    public function delete($param) {
		return $this->db->delete('upraisal_log', array('id' => $param));
	}

}