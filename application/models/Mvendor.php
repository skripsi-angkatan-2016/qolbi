<?php
class Mvendor extends CI_Model 
{
    function getAllVendor(){
        return $this->db->get('vendor')->result_array();
    }

    function insertVendor($data){
        return $this->db->insert('vendor',$data);
    }

    function getVendorById($id){
        return $this->db->get_where('vendor',['vendor_id' => $id])->row_array();
    }

    function updateVendor($data,$id){
        $this->db->where('vendor_id',$id);
        return $this->db->update('vendor',$data);
    }
}
