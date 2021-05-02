<?php
class AdminBeranda extends CI_Controller 
{
    function index(){
		$selesai = $this->db->where('status','selesai')->get('lelang')->num_rows();
		$sedang_pengerjaan = $this->db->where('status','sedang pengerjaan')->get('lelang')->num_rows();

        $this->load->view('admin/templates/header');
		$this->load->view('admin/templates/topbar');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/beranda',['selesai' => $selesai,'sedang_pengerjaan' => $sedang_pengerjaan]);
		$this->load->view('admin/templates/footer');
    }
}
