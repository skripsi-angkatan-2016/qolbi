<?php
class Lelang extends CI_Controller 
{
    function __construct(){
		parent::__construct();
		$this->load->model(['Mlelang','Mproyek','Mvendor']);
	}
    function index(){
        $data['lelang'] = $this->Mlelang->getAllLelang();
        $this->load->view('admin/templates/header');
		$this->load->view('admin/templates/topbar');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/lelang/index',$data);
		$this->load->view('admin/templates/footer');
    }
    
    function tambah(){
        $data['proyek'] = $this->Mproyek->getAllProyek();
        $data['vendor'] = $this->Mvendor->getAllVendor();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/topbar');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/lelang/tambah',$data);
        $this->load->view('admin/templates/footer');
    }
    
    function edit($id){
        $data['lelang'] = $this->Mlelang->getLelangById($id);
        $data['proyek'] = $this->Mproyek->getAllProyek();
        $data['vendor'] = $this->Mvendor->getAllVendor();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/topbar');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/lelang/edit',$data);
        $this->load->view('admin/templates/footer');

    }

    function insert(){
        $data =  [
            'vendor_id' => $this->input->post('vendor_id'),
            'proyek_id' => $this->input->post('proyek_id'),
        ];

        $result = $this->Mlelang->insertLelang($data);
		if ($result) {
			$this->session->set_flashdata('message','berhasil menambah lelang');
			redirect(base_url('index.php/lelang'));
		}
    }

    function update(){
        $id = $this->input->post('id');
        $data =  [
            'vendor_id' => $this->input->post('vendor_id'),
            'proyek_id' => $this->input->post('proyek_id'),
        ];

        $result = $this->Mlelang->updateLelang($data,$id);
		if ($result) {
			$this->session->set_flashdata('message','berhasil mengupdate lelang');
			redirect(base_url('index.php/lelang'));
		}
    }

    // 
    function status($id){
        
        $data['lelang'] = $this->db->get_where('lelang',['id' => $id])->row_array();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/topbar');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/lelang/status',$data);
        $this->load->view('admin/templates/footer');
    }

    function updateStatus(){
        $id = $this->input->post('id');
        $data = ['status_pemeriksa' => $this->input->post('status_pemeriksa')];

        $this->db->where('id', $id);
        $result = $this->db->update('lelang',$data);
        
		if ($result) {
			$this->session->set_flashdata('message','berhasil mengupdate status proyek');
			redirect(base_url('index.php/lelang'));
		}
    }

    function ceklis_berkas($id){
        $data['lelang'] = $this->db->get_where('lelang',['id' => $id])->row_array();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/topbar');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/lelang/ceklis_berkas',$data);
        $this->load->view('admin/templates/footer');
    }

    function insertCeklisBerkas(){
        $idLelang   = $this->input->post('id');
        $idVendor   = $this->input->post('vendor_id');
        $idProyek   = $this->input->post('proyek_id');
        $nama       = $this->input->post('nama');

        // var_dump($this->input->post('date'))));
        // die;
        if (!empty($nama)){
            foreach ($nama as $key => $value ) {
                $data['lelang_id'] = $idLelang;
                $data['vendor_id'] = $idVendor;
                $data['proyek_id'] = $idProyek;
                $data['nama'] = $value;
                $data['nomor'] = $this->input->post('nomor')[$key];
                $data['tanggal'] =  $this->input->post('date')[$key];
                $data['copy'] = $this->input->post('copy')[$key];
                $data['berkas'] = $this->input->post('berkas')[$key];
                $this->db->insert('ceklis_dokumen',$data);
            }

                $this->session->set_flashdata('message','berhasil ceklis berkas');
                redirect(base_url('lelang/ceklis_berkas/'.$idLelang));
            
        
        }
    }

    function LihatCeklisBerkas($id){
        $data['ceklis'] = $this->db->get_where('ceklis_dokumen',['lelang_id' => $id])->result_array();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/topbar');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/lelang/data_ceklis_berkas',$data);
        $this->load->view('admin/templates/footer');
    }

    function statusPembayaran($id){
        $data['lelang'] = $this->db->get_where('lelang',['id' => $id])->row_array();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/topbar');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/lelang/status_pembayaran',$data);
        $this->load->view('admin/templates/footer');
    }

    function updateStatusPembayaran(){
        $id = $this->input->post('id');
        $data = ['status_pembayaran' => $this->input->post('status_pembayaran')];

        $this->db->where('id', $id);
        $result = $this->db->update('lelang',$data);
        
		if ($result) {
			$this->session->set_flashdata('message','berhasil mengupdate status pembayaran');
			redirect(base_url('index.php/lelang'));
		}
    }

    function cetakNotaDinas($id){
        $this->db->select('*');
        $this->db->from('lelang');
        $this->db->join('proyek','lelang.proyek_id = proyek.proyek_id');
        $data['lelang'] =  $this->db->get()->row_array();
       
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/topbar');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/lelang/nota_dinas',$data);
        $this->load->view('admin/templates/footer');
    }

    function catatan($id){
        $data['lelang'] = $this->db->get_where('lelang',['id' => $id])->row_array();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/topbar');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/lelang/catatan',$data);
        $this->load->view('admin/templates/footer');
    }

    function updateCatatan(){
        $id = $this->input->post('id');
        $data = ['catatan' => $this->input->post('catatan')];

        $this->db->where('id', $id);
        $result = $this->db->update('lelang',$data);
        
		if ($result) {
			$this->session->set_flashdata('message','catatan di kirim ke vendor');
			redirect(base_url('index.php/lelang'));
		}
    }
    function hapus($id){
		$this->db->where(['id' => $id]);
		$this->db->delete('lelang');
		$this->session->set_flashdata('hapus', 'berkas lelang berhasil dihapus');
		redirect(base_url('index.php/lelang'));
	}

}
