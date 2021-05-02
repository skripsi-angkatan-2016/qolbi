<?php
class Proyek extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->model(['Mproyek','Mvendor']);
	}
	function index(){
		$data['proyek'] = $this->Mproyek->getAllProyek();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/topbar');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/proyek/index',$data);
		$this->load->view('admin/templates/footer');
	}

    function tambah(){

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/topbar');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/proyek/tambah');
		$this->load->view('admin/templates/footer');
    }

    function edit($id){
        $rowResult = $this->Mproyek->getProyekById($id);

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/topbar');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/proyek/edit',['proyek' => $rowResult]);
		$this->load->view('admin/templates/footer');
    }

    function insert(){
        $data = [
            'nama_proyek' => $this->input->post('nama_proyek'),
            'no_kontrak' => $this->input->post('no_kontrak'),
            'adendum1' => $this->input->post('adendum1'),
            'adendum2' => $this->input->post('adendum2'),
            'adendum3' => $this->input->post('adendum3'),
            'adendum4' => $this->input->post('adendum4'),
            'nilai_kontrak' => $this->input->post('nilai_kontrak'),
            'nilai_tagihan' => $this->input->post('nilai_tagihan'),
            'sumber_dana' => $this->input->post('sumber_dana'),
            'lokasi' => $this->input->post('lokasi'),
            'no_invoice' => $this->input->post('no_invoice'),
            'no_posting' => $this->input->post('no_posting'),
            'kategori' => $this->input->post('kategori'),
            
        ];

        $result = $this->Mproyek->insertProyek($data);
		if ($result) {
			$this->session->set_flashdata('message','berhasil menambah proyek');
			redirect(base_url('proyek'));
		}
    }

    function update(){
        $id = $this->input->post('proyek_id');
        $data = [
            'nama_proyek' => $this->input->post('nama_proyek'),
            'no_kontrak' => $this->input->post('no_kontrak'),
            'adendum1' => $this->input->post('adendum1'),
            'adendum2' => $this->input->post('adendum2'),
            'adendum3' => $this->input->post('adendum3'),
            'adendum4' => $this->input->post('adendum4'),
            'nilai_kontrak' => $this->input->post('nilai_kontrak'),
            'nilai_tagihan' => $this->input->post('nilai_tagihan'),
            'sumber_dana' => $this->input->post('sumber_dana'),
            'lokasi' => $this->input->post('lokasi'),
            'no_invoice' => $this->input->post('no_invoice'),
            'no_posting' => $this->input->post('no_posting'),
            'kategori' => $this->input->post('kategori'),
            
        ];

        // var_dump($data);die;
		$result = $this->Mproyek->updateProyek($data,$id);
		if ($result) {
			$this->session->set_flashdata('message','berhasil mengupdate proyek');
			redirect(base_url('proyek'));
		}
    }

    function hapus($id){
      
		$this->db->where(['proyek_id' => $id]);
		$this->db->delete('proyek');
		$this->session->set_flashdata('hapus', 'proyek berhasil dihapus');
		redirect(base_url('index.php/proyek'));
	}
}
