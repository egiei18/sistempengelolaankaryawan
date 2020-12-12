<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    // public function Update_User_Data($iduser,$data)
    // {
    //     $this->db->set($data);
    //     $this->db->where('iduser',$iduser);
    //     $this->db->update('user');
    //     if($this->db->affected_rows() > 0)
    //         return true;
    //     else
    //         return false;
    // }

    // public function Check_Old_Password($iduser,$oldpassword)
    // {
    //     $this->db->where('iduser',$iduser);
    //     $this->db->where('password', $oldpassword);
    //     $query = $this->db->get('user');
    //     if($query->num_rows()>0)
    //     {
    //         return true;
    //     }
    //     else {
    //         return false;
    //     }
    // }
    public function get_user($iduser) 
    {

        $this->db->where('iduser',$iduser);
        $query = $this->db->get('user');
        return $query->row();
    }

    public function update($iduser,$userdata)
    {
        $this->db->where('iduser',$iduser);
        $this->db->update('user',$userdata);
    }

}