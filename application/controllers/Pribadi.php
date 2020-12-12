<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pribadi extends CI_Controller {

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
		$this->load->model('pribadimodel');

		//cek apakah sudah login atau belum
		if($this->session->userdata('status') != "login"){
			$this->session->set_flashdata('info', 'Maaf, Anda harus login terlebih dahulu.');
			redirect(base_url("site"));
		}
	}

	public function index()
	{	

		$data['pribadi_karyawan'] = $this->pribadimodel->GetPribadi();
		$data['content'] = "pribadi/view";
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

				$lastId = $this->pribadimodel->getLastId()+1;

				$lastId		= $this->input->post('id');
				$FullName = $this->input->post('FullName');
				$NIK 		= $this->input->post('NIK');
                $noKK 		= $this->input->post('noKK');
                $noBPJSkesehatan = $this->input->post('noBPJSkesehatan');
                $noBPJSketenagakerjaan = $this->input->post('noBPJSketenagakerjaan');
				$noNPWP = $this->input->post('noNPWP');
				$foto = $_FILES['foto'];
				if($foto['name']==''){} else{
					$config['upload_path'] = './assets/foto-pribadi';
					$config['allowed_types'] = 'jpg|png|gif';

					$this->load->library('upload',$config);
					if(!$this->upload->do_upload('foto'))
					{
						echo "Upload Gagal";
						die();
					}
					else {
						$foto = $this->upload->data('file_name');
					}
				}
						$field = array (
							'id'	 => $lastId,
						    'FullName' => $FullName,
						    'NIK'=> $NIK,
                            'noKK'=> $noKK,
                            'noBPJSkesehatan'=> $noBPJSkesehatan,
                            'noBPJSketenagakerjaan' => $noBPJSketenagakerjaan,
							'noNPWP'=> $noNPWP,
							'foto'=> $foto
						);

						$this->db->insert('pribadi_karyawan', $field);

						if($this->db->affected_rows()) {
							$this->session->set_flashdata('info', 'Data berhasil disimpan');
							redirect('pribadi');
						} else {
							$this->session->set_flashdata('info', 'Data gagal disimpan');
							redirect('pribadi');
						}

				// }

			} else {
				$id = $this->uri->segment(3);
				$data['edit'] = $this->pribadimodel->GetData($id);
				$data['list'] = $this->pribadimodel->GetPribadi();
				$data['content'] = "pribadi/add";
				$this->load->view('template/template', $data);
			}
	}
	public function edit()
	{	
		$this->load->library('fungsi');

		if($this->input->post('submit')) 
			{
				//var_dump($this->input->post());
				$id 		= $this->input->post('id');
				$FullName = $this->input->post('FullName');/*
				$tgllahir 	= $this->input->post('tgllahir');*/
				$NIK 	= $this->input->post('NIK');
                $noKK 		= $this->input->post('noKK');
                $noBPJSkesehatan = $this->input->post('noBPJSkesehatan');
				$noBPJSketenagakerjaan = $this->input->post('noBPJSketenagakerjaan');
				$noNPWP = $this->input->post('noNPWP');
				if($foto=''){} else{
					$config['upload_path'] = './assets/foto-pribadi';
					$config['allowed_types'] = 'jpg|png|gif';

					$this->load->library('upload',$config);
					if(!$this->upload->do_upload('foto'))
					{
						echo "Upload Gagal";
						die();
					}
					else {
						$foto = $this->upload->data('file_name');
					}
				}
						$field = array (
						    'FullName' 	=> $FullName,
						    'NIK' => $NIK,
                            'noKK' => $noKK,
                            'noBPJSkesehatan'=> $noBPJSkesehatan,
                            'noBPJSketenagakerjaan'=> $noBPJSketenagakerjaan,
							'noNPWP'=> $noNPWP,
							'foto'=> $foto
						);

				$this->db->where('id', $id);
				$this->db->update('pribadi_karyawan', $field);

				if($this->db->affected_rows()) {
					$this->session->set_flashdata('info', 'Data berhasil diupdate');
					redirect('pribadi');
				} else {
					$this->session->set_flashdata('info', 'Data gagal diupdate');
					redirect('pribadi');
				}

			} else {
				$id = $this->uri->segment(3);
				$data['edit'] = $this->pribadimodel->GetData($id);
				$data['content'] = "pribadi/edit";
				$this->load->view('template/template', $data);
			}

	}

	public function hapus($id)
	{
		$this->pribadimodel->delete($id);
		
		if($this->db->affected_rows()) {
			$this->session->set_flashdata('info', 'Data berhasil dihapus');
			redirect('pribadi');
		} else {
			$this->session->set_flashdata('info', 'Data gagal dihapus');
			redirect('pribadi');
		}
	}

	public function detail($id)
	{
		
		// $this->karyawanmodel->detail_data($id);
		// $this->load->view('template/template', $data);
		$data['detail'] = $this->pribadimodel->GetData($id);
		$data['content'] = "pribadi/detail";
		$this->load->view('template/template', $data);
	}

	public function print($id)
	{
		$data['print_privasi'] = $this->pribadimodel->GetPrint($id);
		$data['content'] = "pribadi/print_privasi";
		$this->load->view('template/template', $data);
		//$this->load->view('print_karyawan',$data);
	}

}
