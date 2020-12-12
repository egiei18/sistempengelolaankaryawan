<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upraisal extends CI_Controller {

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
		$this->load->model('upraisalmodel');

		//cek apakah sudah login atau belum
		if($this->session->userdata('status') != "login"){
			$this->session->set_flashdata('info', 'Maaf, Anda harus login terlebih dahulu.');
			redirect(base_url("site"));
		}
	}

	public function index()
	{	

		$data['tabel_upraisal'] = $this->upraisalmodel->GetNilai();
		$data['content'] = "upraisal/view";
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

				
					$lastId = $this->upraisalmodel->getLastId()+1;

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
								redirect('upraisal');
							} else {
								$this->session->set_flashdata('info', 'Data gagal disimpan');
								redirect('upraisal');
							}
	
					// }
	
				} else {
					$id = $this->uri->segment(3);
					$data['edit'] = $this->upraisalmodel->GetData($id);
					$data['list'] = $this->upraisalmodel->GetNilai();
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
				$this->db->update('tabel_upraisal', $field);

				if($this->db->affected_rows()) {
					$this->session->set_flashdata('info', 'Data berhasil diupdate');
					redirect('upraisal');
				} else {
					$this->session->set_flashdata('info', 'Data gagal diupdate');
					redirect('upraisal');
					
				}

			} else {
				$id = $this->uri->segment(3);
				$data['edit'] = $this->upraisalmodel->GetData($id);
				$data['content'] = "upraisal/edit";
				$this->load->view('template/template', $data);
			}

	}

	public function hapus($id)
	{
		$this->upraisalmodel->delete($id);
		
		if($this->db->affected_rows()) {
			$this->session->set_flashdata('info', 'Data berhasil dihapus');
			redirect('upraisal');
		} else {
			$this->session->set_flashdata('info', 'Data gagal dihapus');
			redirect('upraisal');
		}
	}

}
