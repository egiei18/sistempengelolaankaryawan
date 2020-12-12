<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perubahan extends CI_Controller {

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

	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('perubahanmodel');

		//cek apakah sudah login atau belum
		if($this->session->userdata('status') != "login"){
			$this->session->set_flashdata('info', 'Maaf, Anda harus login terlebih dahulu.');
			redirect(base_url("site"));
		}
	}

	public function index()
	{	

		$data['tabel_mutasi'] = $this->perubahanmodel->GetPerubahan();
		$data['content'] = "perubahan/view";
		$this->load->view('template/template', $data);
	}

	public function add()
	{
		$this->load->library('fungsi');

		if($this->input->post('submit')) 
			{

				//cek upload foto atau tidak
				// if(isset($_FILES['foto']) && is_uploaded_file($_FILES['foto']['tmp_name']))
				// {

				// $lastId = $this->supirmodel->getLastId()+1;

				// $lastId		= $this->input->post('idDriver');
				// $namaDriver = $this->input->post('namaDriver');
				// $ktp 		= $this->input->post('ktp');
				
				// $config['upload_path']          = './img/';
    //             $config['allowed_types']        = 'gif|jpg|png';
    //             //$config['max_size']             = 100;
    //             //$config['max_width']            = 1024;
    //             //$config['max_height']           = 768;
    //             $this->load->library('upload', $config);

				// $image_info = $this->upload->data();
				// $file_name 	= $image_info['file_name'];


				// 		$field = array (
				// 			'idDriver'	 => $lastId,
				// 		    'namaDriver' => $namaDriver,
				// 		    'ktp' 		 => $ktp,
				// 		    'foto'		 => $_FILES['foto']['name']
				// 		);

				//                 if (!$this->upload->do_upload('foto')) {
				// 	                // jika validasi file gagal, kirim parameter error ke index
				// 	                $error = array('error' => $this->upload->display_errors());
				// 	                $this->index($error);
				// 	            } else {
				// 						$this->db->insert('driver', $field);

				// 						if($this->db->affected_rows()) {
				// 							$this->session->set_flashdata('info', 'Data berhasil disimpan');
				// 							redirect('supir');
				// 						} else {
				// 							$this->session->set_flashdata('info', 'Data gagal disimpan');
				// 							redirect('supir');
				// 						}
				// 				}

				// } else {

				
					$lastId = $this->perubahanmodel->getLastId()+1;

					$id		= $this->input->post('id');
					$FullName = $this->input->post('FullName');
					$status_karyawan = $this->input->post('status_karyawan');
					$perubahan_status = $this->input->post('perubahan_status');
					$divisi	= $this->input->post('divisi');
					$jabatan = $this->input->post('jabatan');
					$tanggal_status = $this->input->post('tanggal_status');
					$tanggal_gaji = $this->input->post('tanggal_gaji');
					
		
							$field = array (
								'id'	 => $lastId,
								'FullName' => $FullName,
								'status_karyawan'=>$status_karyawan,
								'perubahan_status'=> $perubahan_status,
								'divisi'=> $divisi,
								'jabatan'=> $jabatan,
								'tanggal_status' =>$tanggal_status,
								'tanggal_gaji'=> $tanggal_gaji,
								
							);
	
							$this->db->insert('tabel_mutasi', $field);
	
							if($this->db->affected_rows()) {
								$this->session->set_flashdata('info', 'Data berhasil disimpan');
								redirect('perubahan');
							} else {
								$this->session->set_flashdata('info', 'Data gagal disimpan');
								redirect('perubahan');
							}
	
					// }
	
				} else {
					$id = $this->uri->segment(3);
					$data['edit'] = $this->perubahanmodel->GetData($id);
					$data['list'] = $this->perubahanmodel->GetPerubahan();
					$data['content'] = "perubahan/add";
					$this->load->view('template/template', $data);
				}
		}
	public function edit()
	{	
		$this->load->library('fungsi');

		if($this->input->post('submit')) {
				$id	= $this->input->post('id');
				$FullName = $this->input->post('FullName');/*
				$tgllahir 	= $this->input->post('tgllahir');*/
				$status_karyawan 	= $this->input->post('status_karyawan');
                $perubahan_status 		= $this->input->post('perubahan_status');
                $divisi = $this->input->post('divisi');
                $jabatan = $this->input->post('jabatan');
				$tanggal_status = $this->input->post('tanggal_status');
				$tanggal_gaji = $this->input->post('tanggal_gaji');

				$field = array (
					
					'FullName' 	=> $FullName,
					'status_karyawan' => $status_karyawan,
					'perubahan_status'=>$perubahan_status,
                    'divisi' => $divisi,
                    'jabatan'=> $jabatan,
                    'tanggal_status'=> $tanggal_status,
					'tanggal_gaji'=> $tanggal_gaji,
				);

				$this->db->where('id', $id);
				$this->db->update('tabel_mutasi', $field);

				if($this->db->affected_rows()) {
					$this->session->set_flashdata('info', 'Data berhasil diupdate');
					redirect('perubahan');
				} else {
					$this->session->set_flashdata('info', 'Data gagal diupdate');
					redirect('perubahan');
				}
			}
			else {
				$id = $this->uri->segment(3);
				$data['edit'] = $this->perubahanmodel->GetData($id);
				$data['content'] = "perubahan/edit";
				$this->load->view('template/template', $data);
			}
		}


	public function hapus($id)
	{	
		$this->perubahanmodel->delete($id);
		
		if($this->db->affected_rows()) {
			$this->session->set_flashdata('info', 'Data berhasil dihapus');
			redirect('perubahan');
		} else {
			$this->session->set_flashdata('info', 'Data gagal dihapus');
			redirect('perubahan');
		}
	}

}
