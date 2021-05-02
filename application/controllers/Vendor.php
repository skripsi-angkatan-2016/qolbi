<?php
class Vendor extends CI_Controller 
{
	function __construct(){
		parent::__construct();
		$this->load->model(['Mvendor']);
	}
    function index(){
		$data['vendor'] = $this->Mvendor->getAllVendor();
        $this->load->view('admin/templates/header');
		$this->load->view('admin/templates/topbar');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/vendor/index',$data);
		$this->load->view('admin/templates/footer');
    }

    function tambah(){
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/topbar');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/vendor/tambah');
		$this->load->view('admin/templates/footer');
	}

	function edit($id){
		$rowResult['vendor'] = $this->Mvendor->getVendorById($id);
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/topbar');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/vendor/edit',$rowResult);
		$this->load->view('admin/templates/footer');
	}

	function insert(){
		$data = [
			'nama' => $this->input->post('nama'),
			'npwp' => $this->input->post('npwp'),
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
		];

		$result = $this->Mvendor->insertVendor($data);
		if ($result) {
			$this->session->set_flashdata('message','berhasil menambah vendor');
			redirect(base_url('vendor'));
		}
	}

	function update(){
		$id = $this->input->post('vendor_id');
		$data = [
			'nama' => $this->input->post('nama'),
			'npwp' => $this->input->post('npwp'),
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email')
		];

		$result = $this->Mvendor->updateVendor($data,$id);
		if ($result) {
			$this->session->set_flashdata('message','berhasil mengupdate vendor');
			redirect(base_url('vendor'));
		}
	}

	function hapus($id){
      
		$this->db->where(['vendor_id' => $id]);
		$this->db->delete('vendor');
		$this->session->set_flashdata('hapus', 'vendor berhasil dihapus');
		redirect(base_url('index.php/vendor'));
	}
}
