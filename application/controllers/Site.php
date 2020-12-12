<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

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

	function __construct(){
		parent::__construct();		
		$this->load->model('sitemodel');
		$this->load->model('loginmodel');
		// $this->load->model('changemodel');
		$this->load->model('user_model');

	}

	public function index()
	{
		if($this->session->userdata('status') == "login"){

			$data = array(
				'countKaryawan' =>  $this->sitemodel->count_all('tabel_karyawan'),
				'countGenderWanita'=> $this->sitemodel->count_karyawan_wanita(),
				'countGenderPria'=> $this->sitemodel->count_karyawan_pria(),
				'countDriver' =>  $this->sitemodel->count_all('driver'),
				'countPegawai' =>  $this->sitemodel->count_all('pegawai')
			);

			$data['karyawan'] = $this->sitemodel->GetKaryawan();
			$data['content'] = "content";
			$this->load->view('template/template', $data);
		} else {
			$this->load->view('login');
		}
	}

	function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);

		$cek = $this->loginmodel->cek_login("user",$where)->num_rows();

		$user = $this->db->join('hak_akses','hak_akses.id_hakases=user.id_hakases')->where($where)->get('user')->row();
		// var_dump($user);
		if($cek > 0){

			$data_session = array(
				'iduser' 	=> $user->iduser,
				'username' 	=> $username,
				'hak_akses' => $user->nama_hakakses,
				'status'	=> 'login'
				);

			$this->session->set_userdata($data_session);

			
			redirect(base_url("site"));

		}else{
			$this->session->set_flashdata('info', 'Username atau password salah! <br>Silahkan untuk dicoba kembali');
			redirect('site');
			echo "Username dan password salah !";
		}
	}

	public function changePassword() 
	{
		// $this->login();

		$data['title'] = "Ganti Password";
		
		$this->form_validation->set_rules('oldpass','old password','callback_password_check');
		$this->form_validation->set_rules('newpass','new password','required');
		$this->form_validation->set_rules('passconf','confirm password','required|matches[newpass]');

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		if($this->form_validation->run() == false)
		{
			$data['content'] = "ganti/formGantiPassword";
			$this->load->view('template/template', $data);
			
		} else {
			$iduser = $this->session->userdata('iduser');
			$newpass = $this->input->post('newpass');
			$this->user_model->update($iduser,array('password'=>md5($newpass)));
			redirect('site/logout');
		}
	}

		public function password_check($oldpass)
		{
			$iduser = $this->session->userdata('iduser');
			$username = $this->user_model->get_user($iduser);

			if($username->password != md5($oldpass))
			{
				$this->form_validation->set_message('password_check','The {field} does not match');
				return false;
			}

			return true;
		}
	
	// public function Change_Password() {

	// public function Change_Password()
	// {
	// 	$this->form_validation->set_rules('old_pass','Old Password', 'trim|required|max_length[150]');
	// 	$this->form_validation->set_rules('new_pass','New Password', 'trim|required|max_length[150]');
	// 	$this->form_validation->set_rules('rep_new_pass','Repeat Password', 'trim|required|max_length[150]|matches[new_pass]');
	// 	if($this->form_validation->run() == false)
	// 	{
	// 		$data['title'] = "Ganti Password";
	// 		$data['content'] = "ganti/changepassword";
	// 		$this->load->view('template/template', $data);
	// 	} 
	// 	else {

	// 		$data = array(
	// 			'password'=>md5($this->input->post('new_pass'))
	// 		);
	// 		print_r($data);exit();
	// 		$this->user_model->Check_Old_Password($this->session->userdata('iduser'),md5($this->input->post('new_pass')));
	// 		if($result > 0 AND $result === true)
	// 		{
	// 			$this->user_model->Update_User_Data($this->session->userdata('iduser'),$data);
				
	// 			if($result > 0)
	// 			{
	// 				$this->session->set_flashdata('success_msg', 'Password has been Change.');
	// 				return redirect('site/Change_Password');
	// 			} else {
	// 				$this->session->set_flashdata('error_msg', '<b>Error: </b>User Password not Change.');
	// 				return redirect('site/Change_Password');
	// 			}
	// 		}
	// 		else {
	// 			$this->session->set_flashdata('error_msg', '<b>Error: </b>User Old Password not Match.');
	// 			return redirect('site/Change_Password');
	// 		}

	// 	}
	// }	

	// }
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('site'));
	}
}
