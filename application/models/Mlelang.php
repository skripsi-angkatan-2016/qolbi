<?php
class Mlelang extends CI_Model
{
    function getAllLelang(){
        $this->db->select('*');
        $this->db->from('lelang');
        $this->db->join('proyek','lelang.proyek_id = proyek.proyek_id');
        $this->db->join('vendor','lelang.vendor_id = vendor.vendor_id');
        return $this->db->get()->result_array();
    }

    function insertLelang($data){
        return $this->db->insert('lelang',$data);
    }

    function getLelangById($id){
        return $this->db->get_where('lelang',['id' => $id])->row_array();
    }

    function updateLelang($data,$id){
        $this->db->where('id',$id);
        return $this->db->update('lelang',$data);
    }
}
