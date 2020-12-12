<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('riwayatmodel');

		if($this->session->userdata('status') != "login"){
			$this->session->set_flashdata('info', 'Maaf, Anda harus login terlebih dahulu.');
			redirect(base_url("site"));
		}
	}

	public function index()
	{	
		$data['upraisal_log'] = $this->riwayatmodel->GetRiwayat();
		$data['content'] = "riwayat/view";
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

				
					$lastId = $this->riwayatmodel->getLastId()+1;

					$id	= $this->input->post('id');
					$FullName = $this->input->post('FullName');
                    $abjad = $this->input->post('abjad');
                    $angka = $this->input->post('angka');
					$tanggal_penilaian = $this->input->post('tanggal_penilaian');
							$field = array (
								'id'	 => $lastId,
								'FullName' => $FullName,
                                'abjad'=>$abjad,
								'angka'=>$angka,
								'tanggal_penilaian'=>$tanggal_penilaian
								
							);
	
							$this->db->insert('tabel_upraisal', $field);
	
							if($this->db->affected_rows()) {
								$this->session->set_flashdata('info', 'Data berhasil disimpan');
								redirect('riwayat');
							} else {
								$this->session->set_flashdata('info', 'Data gagal disimpan');
								redirect('riwayat');
							}
	
					// }
	
				} else {
					$id = $this->uri->segment(3);
					$data['edit'] = $this->riwayatmodel->GetData($id);
					$data['list'] = $this->riwayatmodel->GetRiwayat();
					$data['content'] = "upraisal/add";
					$this->load->view('template/template', $data);
				}
		}
	public function edit()
	{	
		$this->load->library('fungsi');

		if($this->input->post('submit')) 
			{
				//var_dump($this->input->post());
                $id	= $this->input->post('id');
                $FullName = $this->input->post('FullName');
                $abjad = $this->input->post('abjad');
                $angka = $this->input->post('angka');
				$tanggal_penilaian = $this->input->post('tanggal_penilaian');

                        $field = array (
                            'id'	 =>$id,
                            'FullName' =>$FullName,
                            'abjad'=>$abjad,
							'angka'=>$angka,
							'tanggal_penilaian'=>$tanggal_penilaian
                        );
	

				$this->db->where('id', $id);
				$this->db->update('upraisal_log', $field);

				if($this->db->affected_rows()) {
					$this->session->set_flashdata('info', 'Data berhasil diupdate');
					redirect('riwayat');
				} else {
					$this->session->set_flashdata('info', 'Data gagal diupdate');
					redirect('riwayat');
					
				}

			} else {
				$id = $this->uri->segment(3);
				$data['edit'] = $this->riwayatmodel->GetData($id);
				$data['content'] = "riwayat/edit";
				$this->load->view('template/template', $data);
			}

	}

}