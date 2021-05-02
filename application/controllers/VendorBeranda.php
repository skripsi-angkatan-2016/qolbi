<?php
class VendorBeranda extends CI_Controller 
{
    function __construct(){
        parent::__construct();
        $this->load->library('form_validation');

    }
    function index(){
        $id = $this->session->userdata('vendor_id');
        
        $this->db->select('*');
        $this->db->from('lelang');
        $this->db->where('lelang.vendor_id',$id);
        $this->db->join('vendor','lelang.vendor_id = vendor.vendor_id');
        $this->db->join('proyek','lelang.proyek_id = proyek.proyek_id');
        $data['lelang'] = $this->db->get()->result_array();

     
        $this->load->view('vendor/templates/header');
		$this->load->view('vendor/templates/topbar');
		$this->load->view('vendor/beranda',$data);
		$this->load->view('vendor/templates/footer');
    }

    function profile(){
        $id = $this->session->userdata('vendor_id');
        
        $this->db->select('*');
        $this->db->from('vendor');
        $this->db->where('vendor_id',$id);
        $data['vendor'] = $this->db->get()->row_array();

        $this->load->view('vendor/templates/header');
		$this->load->view('vendor/templates/topbar');
		$this->load->view('vendor/profile',$data);
		$this->load->view('vendor/templates/footer');
    }

    function updateProfile(){
        $id = $this->input->post('vendor_id');
        $data = [
            'nama' => $this->input->post('nama'),
            'npwp' => $this->input->post('npwp'),
            'alamat' => $this->input->post('alamat'),
            'email' => $this->input->post('email'),
        ];

      
        $this->db->where('vendor_id',$id);
        $this->db->update('vendor',$data);

        $this->session->set_flashdata('pesan' ,' Berhasil mengupdate data');
        redirect(base_url('vendorberanda/profile'));
    }

    function password(){
        $id = $this->session->userdata('vendor_id');
        
        $this->db->select('*');
        $this->db->from('vendor');
        $this->db->where('vendor_id',$id);
        $data['vendor'] = $this->db->get()->row_array();

        $this->load->view('vendor/templates/header');
		$this->load->view('vendor/templates/topbar');
		$this->load->view('vendor/password',$data);
		$this->load->view('vendor/templates/footer');
    }

    function updatePassword(){
        $this->form_validation->set_rules('passwordbaru', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('passwordkonfirmasi', 'Konfirmasi Password', 'required|min_length[5]|matches[passwordbaru]');

        if($this->form_validation->run() == FALSE){
            $id = $this->session->userdata('vendor_id');
        
            $this->db->select('*');
            $this->db->from('vendor');
            $this->db->where('vendor_id',$id);
            $data['vendor'] = $this->db->get()->row_array();
    
            $this->load->view('vendor/templates/header');
            $this->load->view('vendor/templates/topbar');
            $this->load->view('vendor/password',$data);
            $this->load->view('vendor/templates/footer');
            
        }else{
            $id = $this->input->post('vendor_id');
            $data = [
                'password' => $this->input->post('passwordbaru')
            ];

            $this->session->set_flashdata('pesan' ,' Berhasil mengupdate password');
            redirect(base_url('vendorberanda/password'));

        }
    }

    // status
    function status($id){
        $data['lelang'] = $this->db->get_where('lelang',['id' => $id])->row_array();
        $this->load->view('vendor/templates/header');
        $this->load->view('vendor/templates/topbar');
        $this->load->view('vendor/status',$data);
        $this->load->view('vendor/templates/footer');
    }

    function updateStatus(){
        $id = $this->input->post('id');

        $data = [
            'status' => $this->input->post('status'),
        ];

      
        $this->db->where('id',$id);
        $this->db->update('lelang',$data);

        $this->session->set_flashdata('pesan' ,' Berhasil mengupdate data');
        redirect(base_url('vendorberanda'));
    }

    function berkas($id){
        $data['lelang'] = $this->db->get_where('lelang',['id' => $id])->row_array();
        $this->load->view('vendor/templates/header');
        $this->load->view('vendor/templates/topbar');
        $this->load->view('vendor/berkas',$data);
        $this->load->view('vendor/templates/footer');
    }

    function uploadBerkas(){
        //Check whether user upload picture
        if(!empty($_FILES['berkas']['name'])){
            $config['upload_path'] = 'assets/berkas/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf';
            $config['file_name'] = $_FILES['berkas']['name'];
            
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('berkas')){
                $uploadData = $this->upload->data();
                $berkas = $uploadData['file_name'];
            }else{
                $berkas = '';
            }
        }else{
            $berkas = '';
        }

        $id = $this->input->post('id');
        //Prepare array of user data
        $data = array(
            'berkas' => $berkas
        );
    
        //Pass user data to model
        $this->db->where('id',$id);
        $result = $this->db->update('lelang',$data);

        $this->session->set_flashdata('pesan' ,' Berhasil mengupload berksa');
        redirect(base_url('vendorberanda/berkas/'.$id));
    }
}
