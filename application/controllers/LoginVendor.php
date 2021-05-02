<?php
class LoginVendor extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model(['Mlogin']);
	}
	function index(){
		$login = $this->session->userdata('logged_in');
		echo $login;
		if ($login) {
			redirect(base_url('vendorberanda'));
		}else{
			$this->load->view('vendor/login');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('loginvendor'));
	}
	function check_account(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$auth = $this->Mlogin->get_auth_vendor($email);
		if(!empty($auth)) {
				$password = md5($password);
				if ($password == $auth['password']) {
					$this->session->set_userdata('vendor_id',$auth['vendor_id']);
					$this->session->set_userdata('nama',$auth['nama']);
					$this->session->set_userdata('logged_in', TRUE);
				
					$pesan = array('message' => 'success');
					echo json_encode($pesan);

				}else{
					$pesan = array('message' => 'wrong password');
					echo json_encode($pesan);
				}	
		}else{
			$pesan = array('message' => 'user not found');
			echo json_encode($pesan);
		}
	}
}