<?php
class Admin extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model(['Madmin']);
		$this->load->library('form_validation');
	}
	function index(){
		$data['admin'] = $this->Madmin->getAllAdmin();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/topbar');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/admin/index',$data);
		$this->load->view('admin/templates/footer');
	}
	
	function tambah(){
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/topbar');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/admin/tambah');
		$this->load->view('admin/templates/footer');
	}

	function edit($id){
		$rowResult['admin'] = $this->Madmin->getAdminById($id);
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/topbar');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/admin/edit',$rowResult);
		$this->load->view('admin/templates/footer');
	}

	function insert(){
		$data = [
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'role' => $this->input->post('role'),
			'password' => md5($this->input->post('password')),
		];

		$result = $this->Madmin->insertAdmin($data);
		if ($result) {
			$this->session->set_flashdata('message','berhasil menambah admin');
			redirect(base_url('admin'));
		}
	}

	function update(){
		$id = $this->input->post('admin_id');
		$data = [
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'role' => $this->input->post('role'),
		];

		$result = $this->Madmin->updateAdmin($data,$id);
		if ($result) {
			$this->session->set_flashdata('message','berhasil mengupdate admin');
			redirect(base_url('admin'));
		}
	}

	function password($id){
		$rowResult['admin'] = $this->Madmin->getAdminById($id);
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/topbar');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/admin/password',$rowResult);
		$this->load->view('admin/templates/footer');
	}

	function updatePassword(){
		$this->form_validation->set_rules('passwordbaru', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('passwordkonfirmasi', 'Konfirmasi Password', 'required|min_length[5]|matches[passwordbaru]');

        if($this->form_validation->run() == FALSE){
            $id = $this->session->userdata('admin_id');
        
            $this->db->select('*');
            $this->db->from('admin');
            $this->db->where('admin_id',$id);
            $data['admin'] = $this->db->get()->row_array();
    
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/topbar');
			$this->load->view('admin/templates/sidebar');
            $this->load->view('admin/admin/password',$data);
            $this->load->view('admin/templates/footer');
            
        }else{
            $id = $this->input->post('admin_id');
            $data = [
                'password' => md5($this->input->post('passwordbaru'))
            ];
			
			$result = $this->Madmin->updateAdmin($data,$id);
			if ($result) {	
				$this->session->set_flashdata('message' ,' Berhasil mengupdate password');
				redirect(base_url('admin/password/'.$id));
			}

        }
	}

	function hapus($id){
		$this->db->where(['admin_id' => $id]);
		$this->db->delete('admin');
		$this->session->set_flashdata('hapus', 'admin berhasil dihapus');
		redirect(base_url('admin'));
	}

}