<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginmodel extends CI_Model {

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	// public function get_user($iduser) 
    // {

    //     $this->db->where('iduser',$iduser);
    //     $query = $this->db->get('user');
    //     return $query->row();
    // }

    // public function update($iduser,$userdata)
    // {
    //     $this->db->where('iduser',$iduser);
    //     $this->db->update('users',$userdata);
    // }

}