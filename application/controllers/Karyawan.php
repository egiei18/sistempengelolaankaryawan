<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

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
		$this->load->model('karyawanmodel');

		//cek apakah sudah login atau belum
		if($this->session->userdata('status') != "login"){
			$this->session->set_flashdata('info', 'Maaf, Anda harus login terlebih dahulu.');
			redirect(base_url("site"));
		}
	}

	public function index()
	{	

		$jabatan = $this->db->distinct()->select('Jabatan')->get('tabel_karyawan')->result();

		if(isset($_POST['filter'])){
			
			if(isset($_POST['jabatan'])){
				$jabatans = $_POST['jabatan'];
			}
			if(isset($_POST['kotamadya'])){
				$kotamadyas = $_POST['kotamadya'];
			}
			
			
			$usia = $_POST['usia'];
			$usia1 = $_POST['usia1'];
			$usia2 = $_POST['usia2'];
			$lamakerja = $_POST['lamakerja'];
			$lamakerja1 = $_POST['lamakerja1'];
			$lamakerja2 = $_POST['lamakerja2'];
			$wheres = array('usia' => $usia,'lama_bekerja' => $lamakerja);

			if($usia1!==''&&$usia2!==''&&$lamakerja1!==''&&$lamakerja2!==''){
				if(isset($_POST['jabatan'])){
					$this->db->group_start();
					foreach ($jabatans as $key => $value) {
						$this->db->or_where('Jabatan',$value);
					}
					$this->db->group_end();
				}

				if(isset($_POST['kotamadya'])){
					$this->db->group_start();
					foreach ($kotamadyas as $key => $value) {
						$this->db->or_like('alamat',$value);
					}
					$this->db->group_end();
				}
				
				$data['tabel_karyawan'] = $this->db
									  ->like($wheres)
									  ->where("usia BETWEEN $usia1 AND $usia2")
									  ->where("lama_bekerja BETWEEN $lamakerja1 AND $lamakerja2")
									//   ->where("Jabatan $jabatan1 AND $jabatan2 AND $jabatan3 AND $jabatan4 AND $jabatan5 AND $jabatan6 AND $jabatan7")
									  ->get('tabel_karyawan')
									  ->result();

					// $testing = $this->db
					// ->like($wheres)
					// ->where("usia BETWEEN $usia1 AND $usia2")
					// ->where("lama_bekerja BETWEEN $lamakerja1 AND $lamakerja2")
				//   ->where("Jabatan $jabatan1 AND $jabatan2 AND $jabatan3 AND $jabatan4 AND $jabatan5 AND $jabatan6 AND $jabatan7")


									  
			// // var_dump($testing); die();
			// var_dump($testing); die();
			}elseif($usia1!==''&&$usia2!==''&&$lamakerja1==''&&$lamakerja2==''){
				$wheres = array('lama_bekerja' => $lamakerja);
				if(isset($_POST['jabatan'])){
					foreach ($jabatans as $key => $value) {
						$this->db->or_where('Jabatan',$value);
					}
				}
				
				if(isset($_POST['kotamadya'])){
					foreach ($kotamadyas as $key => $value) {
						$this->db->or_like('alamat',$value);
					}
				}
				$data['tabel_karyawan'] = $this->db
									  ->like($wheres)
									  ->where("usia BETWEEN $usia1 AND $usia2")
									  ->get('tabel_karyawan')
									  ->result();
			}elseif($usia1==''&&$usia2==''&&$lamakerja1!==''&&$lamakerja2!==''){
				$wheres = array('usia' => $usia);
				if(isset($_POST['jabatan'])){
					foreach ($jabatans as $key => $value) {
						$this->db->or_where('Jabatan',$value);
					}
				}

				
				if(isset($_POST['kotamadya'])){
					foreach ($kotamadyas as $key => $value) {
						$this->db->or_like('alamat',$value);
					}
				}

				$data['tabel_karyawan'] = $this->db
										->like($wheres)
										->where("lama_bekerja BETWEEN $lamakerja1 AND $lamakerja2")
										->get('tabel_karyawan')
										->result();
			}
			else{	
				if(isset($_POST['jabatan'])){
					foreach ($jabatans as $key => $value) {
						$this->db->or_where('Jabatan',$value);
					}
				}
				
				if(isset($_POST['kotamadya'])){
					foreach ($kotamadyas as $key => $value) {
						$this->db->or_like('alamat',$value);
					}
				}
				$data['tabel_karyawan'] = $this->db
									  ->like($wheres)
									  ->get('tabel_karyawan')
									  ->result();
			}

			$data['jabatan'] = $jabatan;
			$data['content'] = "karyawan/view";
			$this->load->view('template/template', $data);

			
		
		}else{
			
			$data['jabatan'] = $jabatan;
			$data['tabel_karyawan'] = $this->karyawanmodel->GetKaryawan();
			$data['content'] = "karyawan/view";
			$this->load->view('template/template', $data);
		
		}
	}

	public function add()
	{
		$this->load->library('fungsi');

		if($this->input->post('submit')) 
			{

				
				$lastId = $this->karyawanmodel->getLastId()+1;

				$from = date("Y/m/d");								
				$from2 = strtotime($from);			
				$to = $this->input->post('tanggal_lahir');
				$datetime1 = date_create($to);
				$datetime2 = date_create($from);
				$interval = date_diff($datetime1, $datetime2);
				
                $NIP = $this->input->post('NIP');
				$FullName = $this->input->post('FullName');
                $agama = $this->input->post('agama');
                $usia = $interval->y;
                $status = $this->input->post('status');
                $tempat_lahir = $this->input->post('tempat_lahir');
                $tanggal_lahir = $this->input->post('tanggal_lahir');
                $gender = $this->input->post('gender');
                $divisi = $this->input->post('divisi');
                $Jabatan = $this->input->post('Jabatan');
                $MobileNo = $this->input->post('MobileNo');
				$EmailAddress = $this->input->post('EmailAddress');
				
				$from = date("Y/m/d");								
				$from2 = strtotime($from);
				$to = $this->input->post('tanggal_masuk');
				$datetime1 = date_create($to);
				$datetime2 = date_create($from);
				$kalkulasi = date_diff($datetime1, $datetime2);

                $tanggal_masuk = $this->input->post('tanggal_masuk');
                $lama_bekerja = $kalkulasi->y;
                $alamat = $this->input->post('alamat');
				$kode_pos = $this->input->post('kode_pos');
				$foto = $_FILES['foto'];
				if($foto=''){} else{
					$config['upload_path'] = './assets/foto';
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
                //Foto Karyawan
						$field = array (
                            'id'=> $lastId,
                            'NIP'=>$NIP,
						    'FullName' => $FullName,
						    'agama'=> $agama,
                            'usia'=> $usia,
                            'status'=>$status,
                            'tempat_lahir'=> $tempat_lahir,
                            'tanggal_lahir'=>$tanggal_lahir,
                            'gender' =>$gender,
                            'divisi'=>$divisi,
                            'Jabatan'=>$Jabatan,
                            'MobileNo'=>$MobileNo,
                            'EmailAddress'=>$EmailAddress,
                            'tanggal_masuk'=>$tanggal_masuk,
                            'lama_bekerja'=>$lama_bekerja,
                            'alamat'=>$alamat,
							'kode_pos'=>$kode_pos,
							'foto'=>$foto
						);

						$this->db->insert('tabel_karyawan', $field);

						if($this->db->affected_rows()) {
							$this->session->set_flashdata('info', 'Data berhasil disimpan');
							redirect('karyawan');
						} else {
							$this->session->set_flashdata('info', 'Data gagal disimpan');
							redirect('karyawan');
						}

				}

			 else {
				$id = $this->uri->segment(3);
				$data['edit'] = $this->karyawanmodel->GetData($id);
				$data['list'] = $this->karyawanmodel->GetKaryawan();
				$data['content'] = "karyawan/add";
				$this->load->view('template/template', $data);
			}
	}

	public function edit()
	{	
		$this->load->library('fungsi');

		if($this->input->post('submit')) 
			{
				//var_dump($this->input->post());
                $id		= $this->input->post('id');
                $from = date("Y/m/d");								
				$from2 = strtotime($from);			
				$to = $this->input->post('tanggal_lahir');
				$datetime1 = date_create($to);
				$datetime2 = date_create($from);
				$interval = date_diff($datetime1, $datetime2);
				
                $NIP = $this->input->post('NIP');
				$FullName = $this->input->post('FullName');
                $agama = $this->input->post('agama');
                $usia = $interval->y;
                $status = $this->input->post('status');
                $tempat_lahir = $this->input->post('tempat_lahir');
                $tanggal_lahir = $this->input->post('tanggal_lahir');
                $gender = $this->input->post('gender');
                $divisi = $this->input->post('divisi');
                $Jabatan = $this->input->post('Jabatan');
                $MobileNo = $this->input->post('MobileNo');
				$EmailAddress = $this->input->post('EmailAddress');
				
				$from = date("Y/m/d");								
				$from2 = strtotime($from);
				$to = $this->input->post('tanggal_masuk');
				$datetime1 = date_create($to);
				$datetime2 = date_create($from);
				$kalkulasi = date_diff($datetime1, $datetime2);

                $tanggal_masuk = $this->input->post('tanggal_masuk');
                $lama_bekerja = $kalkulasi->y;
                $alamat = $this->input->post('alamat');
				$kode_pos = $this->input->post('kode_pos');
				$foto = $_FILES['foto'];

				if($foto['name']==''){

					$field = array (
                            
						'NIP'=>$NIP,
						'FullName' => $FullName,
						'agama'=> $agama,
						'usia'=> $usia,
						'status'=>$status,
						'tempat_lahir'=> $tempat_lahir,
						'tanggal_lahir'=>$tanggal_lahir,
						'gender' =>$gender,
						'divisi'=>$divisi,
						'Jabatan'=>$Jabatan,
						'MobileNo'=>$MobileNo,
						'EmailAddress'=>$EmailAddress,
						'tanggal_masuk'=>$tanggal_masuk,
						'lama_bekerja'=>$lama_bekerja,
						'alamat'=>$alamat,
						'kode_pos'=>$kode_pos,
					);

				} else{

					$config['upload_path'] = './assets/foto';
					$config['allowed_types'] = 'jpg|png|gif';

					$this->load->library('upload',$config);
					if($this->upload->do_upload('foto'))
					{
						$foto = $this->upload->data('file_name');
					}

					$field = array (
                            
						'NIP'=>$NIP,
						'FullName' => $FullName,
						'agama'=> $agama,
						'usia'=> $usia,
						'status'=>$status,
						'tempat_lahir'=> $tempat_lahir,
						'tanggal_lahir'=>$tanggal_lahir,
						'gender' =>$gender,
						'divisi'=>$divisi,
						'Jabatan'=>$Jabatan,
						'MobileNo'=>$MobileNo,
						'EmailAddress'=>$EmailAddress,
						'tanggal_masuk'=>$tanggal_masuk,
						'lama_bekerja'=>$lama_bekerja,
						'alamat'=>$alamat,
						'kode_pos'=>$kode_pos,
						'foto' =>$foto
					);
				}
                //Foto Karyawan
						

				$this->db->where('id', $id);
				$this->db->update('tabel_karyawan', $field);

				if($this->db->affected_rows()) {
					$this->session->set_flashdata('info', 'Data berhasil diupdate');
					redirect('karyawan');
				} else {
					$this->session->set_flashdata('info', 'Data gagal diupdate');
					redirect('karyawan');
				}

			} else {
				$id = $this->uri->segment(3);
				$data['edit'] = $this->karyawanmodel->GetData($id);
				$data['content'] = "karyawan/edit";
				$this->load->view('template/template', $data);
			}

	}

	public function hapus($id)
	{
		$this->karyawanmodel->delete($id);
		
		if($this->db->affected_rows()) {
			$this->session->set_flashdata('info', 'Data berhasil dihapus');
			redirect('karyawan');
		} else {
			$this->session->set_flashdata('info', 'Data gagal dihapus');
			redirect('karyawan');
		}
	}

	public function detail($id)
	{
		
		// $this->karyawanmodel->detail_data($id);
		// $this->load->view('template/template', $data);
		$data['detail'] = $this->karyawanmodel->GetData($id);
		$data['content'] = "karyawan/detail";
		$this->load->view('template/template', $data);

	}

	public function print($id)
	{
		$data['print_karyawan'] = $this->karyawanmodel->GetPrint($id);
		$data['content'] = "karyawan/print_karyawan";
		$this->load->view('template/template', $data);
		//$this->load->view('print_karyawan',$data);
	}

}
