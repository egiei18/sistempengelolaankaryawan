<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {

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
		$this->load->model('statusmodel');

		//cek apakah sudah login atau belum
		if($this->session->userdata('status') != "login"){
			$this->session->set_flashdata('info', 'Maaf, Anda harus login terlebih dahulu.');
			redirect(base_url("site"));
		}
	}

	// public function index()
	// {	

		
	// 	$data['mutasi_log'] = $this->statusmodel->GetStatus();
	// 	$data['content'] = "status/view";
	// 	$this->load->view('template/template', $data);
	// }

	public function index()
	{	

	// 	$perubahan_status = $this->db->distinct()->select('perubahan_status')->get('mutasi_log')->result();

	// 	if(isset($_POST['filter'])){
			
	// 		if(isset($_POST['perubahan_status'])){
	// 			$perubahans = $_POST['perubahan_status'];
	// 		}
		
	// 			if(isset($_POST['perubahan_status'])){
	// 				foreach ($perubahans as $key => $value) {
	// 					$this->db->or_where('perubahan_status',$value);
	// 				}
	// 			}

	// 			if(isset($_POST['perubahan_status'])){
	// 				foreach ($perubahans as $key => $value) {
	// 					$this->db->or_where('perubahan_status',$value);
	// 				}
	// 			}
				
	// 			if(isset($_POST['perubahan_status'])){
	// 				foreach ($perubahans as $key => $value) {
	// 					$this->db->or_where('perubahan_status',$value);
	// 				}
	// 			}
	// 		else {	
	// 			if(isset($_POST['perubahan_status'])){
	// 				foreach ($perubahans as $key => $value) {
	// 					$this->db->or_where('perubahan_status',$value);
	// 				}
	// 			}
				
	// 		}
	// 		$data['mutasi_log'] = $this->db
	// 								  //->like($wheres)
	// 								  ->get('mutasi_log')
	// 								  ->result();
	// 		$data['perubahan_status'] = $perubahan_status;
	// 		$data['content'] = "status/view";
	// 		$this->load->view('template/template', $data);

			
		
	// 	}else{
			
	// 		$data['perubahan_status'] = $perubahan_status;
	// 		$data['mutasi_log'] = $this->statusmodel->GetStatus();
	// 		$data['content'] = "status/view";
	// 		$this->load->view('template/template', $data);
		
	// 	}


	$jabatan = $this->db->distinct()->select('Jabatan')->get('mutasi_log')->result();

	if(isset($_POST['filter'])){
		
		if(isset($_POST['jabatan'])){
			$jabatans = $_POST['jabatan'];
		}
		if(isset($_POST['perubahan_status'])){
			$kotamadyas = $_POST['perubahan_status'];
		}
		
		
		// $usia = $_POST['usia'];
		// $usia1 = $_POST['usia1'];
		// $usia2 = $_POST['usia2'];
		// $lamakerja = $_POST['lamakerja'];
		// $lamakerja1 = $_POST['lamakerja1'];
		// $lamakerja2 = $_POST['lamakerja2'];
		// $wheres = array('usia' => $usia,'lama_bekerja' => $lamakerja);

		
			if(isset($_POST['jabatan'])){
				$this->db->group_start();
				foreach ($jabatans as $key => $value) {
					$this->db->or_where('jabatan',$value);
				}
				$this->db->group_end();
			}

			if(isset($_POST['perubahan_status'])){
				$this->db->group_start();
				foreach ($kotamadyas as $key => $value) {
					$this->db->or_like('perubahan_status',$value);
				}
				$this->db->group_end();
			}
			
			// $data['tabel_karyawan'] = $this->db
			// 					  ->like($wheres)
			// 					  ->where("usia BETWEEN $usia1 AND $usia2")
			// 					  ->where("lama_bekerja BETWEEN $lamakerja1 AND $lamakerja2")
			// 					->where("Jabatan $jabatan1 AND $jabatan2 AND $jabatan3 AND $jabatan4 AND $jabatan5 AND $jabatan6 AND $jabatan7")
			// 					  ->get('tabel_karyawan')
			// 					  ->result();

				// $testing = $this->db
				// ->like($wheres)
				// ->where("usia BETWEEN $usia1 AND $usia2")
				// ->where("lama_bekerja BETWEEN $lamakerja1 AND $lamakerja2")
			//   ->where("Jabatan $jabatan1 AND $jabatan2 AND $jabatan3 AND $jabatan4 AND $jabatan5 AND $jabatan6 AND $jabatan7")


								  
		// // var_dump($testing); die();
		// var_dump($testing); die();
		
			
			if(isset($_POST['jabatan'])){
				$this->db->group_start();
				foreach ($jabatans as $key => $value) {
					$this->db->or_where('Jabatan',$value);
				}
				$this->db->group_end();
			}
			
			if(isset($_POST['perubahan_status'])){
				$this->db->group_start();
				foreach ($kotamadyas as $key => $value) {
					$this->db->or_like('perubahan_status',$value);
				}
				$this->db->group_end();
			}
			// $data['tabel_karyawan'] = $this->db
			// 					  ->like($wheres)
			// 					  ->where("usia BETWEEN $usia1 AND $usia2")
			// 					  ->get('tabel_karyawan')
			// 					  ->result();
		
			if(isset($_POST['jabatan'])){
				$this->db->group_start();
				foreach ($jabatans as $key => $value) {
					
					$this->db->or_where('jabatan',$value);
				}
				$this->db->group_end();
			}

			
			if(isset($_POST['perubahan_status'])){
				$this->db->group_start();
				foreach ($kotamadyas as $key => $value) {
					$this->db->or_like('perubahan_status',$value);
				}
				$this->db->group_end();
			}

			// $data['tabel_karyawan'] = $this->db
			// 						->like($wheres)
			// 						->where("lama_bekerja BETWEEN $lamakerja1 AND $lamakerja2")
			// 						->get('tabel_karyawan')
			// 						->result();
		
		else{	
			if(isset($_POST['jabatan'])){
				foreach ($jabatans as $key => $value) {
					$this->db->or_where('Jabatan',$value);
				}
			}
			
			if(isset($_POST['perubahan_status'])){
				foreach ($kotamadyas as $key => $value) {
					$this->db->or_like('perubahan_status',$value);
				}
			}
			// $data['mutasi_log'] = $this->db
			// 					  ->like($wheres)
			// 					  ->get('mutasi_log')
			// 					  ->result();
	
		}
			$data['mutasi_log'] = $this->db
			//->like($wheres)
			->get('mutasi_log')
			->result();
			$data['jabatan'] = $jabatan;
			$data['content'] = "status/view";
			$this->load->view('template/template', $data);

		
	
	}else{
		
		$data['jabatan'] = $jabatan;
		$data['mutasi_log'] = $this->statusmodel->GetStatus();
		$data['content'] = "status/view";
		$this->load->view('template/template', $data);
	
	}
			
	
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

				
					//$lastId = $this->perubahanmodel->getLastId()+1;

					$id		= $this->input->post('id');
					$FullName = $this->input->post('FullName');
					$status_karyawan = $this->input->post('status_karyawan');
					$perubahan_status = $this->input->post('perubahan_status');
					$divisi	= $this->input->post('divisi');
					$jabatan = $this->input->post('jabatan');
					$tanggal_status = $this->input->post('tanggal_status');
					$tanggal_gaji = $this->input->post('tanggal_gaji');
					
		
							$field = array (
								'id'	 => $id,
								'FullName' => $FullName,
								'status_karyawan'=>$status_karyawan,
								'perubahan_status'=> $perubahan_status,
								'divisi'=> $divisi,
								'jabatan'=> $jabatan,
								'tanggal_status' =>$tanggal_status,
								'tanggal_gaji'=> $tanggal_gaji,
								
							);
	
							$this->db->insert('mutasi_log', $field);
	
							if($this->db->affected_rows()) {
								$this->session->set_flashdata('info', 'Data berhasil disimpan');
								redirect('status');
							} else {
								$this->session->set_flashdata('info', 'Data gagal disimpan');
								redirect('status');
							}
	
					// }
	
				} else {
					$id = $this->uri->segment(3);
					$data['edit'] = $this->statusmodel->GetData($id_mutasi);
					$data['list'] = $this->statusmodel->GetStatus();
					$data['content'] = "status/add";
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
					'id'=>$id,
					'FullName' 	=> $FullName,
					'status_karyawan' => $status_karyawan,
					'perubahan_status'=>$perubahan_status,
                    'divisi' => $divisi,
                    'jabatan'=> $jabatan,
                    'tanggal_status'=> $tanggal_status,
					'tanggal_gaji'=> $tanggal_gaji,
				);

				$this->db->where('id', $id);
				$this->db->update('mutasi_log', $field);

				if($this->db->affected_rows()) {
					$this->session->set_flashdata('info', 'Data berhasil diupdate');
					redirect('status');
				} else {
					$this->session->set_flashdata('info', 'Data gagal diupdate');
					redirect('status');
				}
			}
			else {
				$id = $this->uri->segment(3);
				$data['edit'] = $this->statusmodel->GetData($id);
				$data['content'] = "status/edit";
				$this->load->view('template/template', $data);
			}
		}


}