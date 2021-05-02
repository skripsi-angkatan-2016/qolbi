<?php
class Mproyek extends CI_Model 
{
    function getAllProyek(){
        $this->db->select('*');
        $this->db->from('proyek');
    
        return $this->db->get()->result_array();
    }

    function insertProyek($data){
        return $this->db->insert('proyek',$data);
    }

    function getProyekById($id){
        return $this->db->get_where('proyek',['proyek_id' => $id])->row_array();
    }

    function updateProyek($data,$id){
        $this->db->where('proyek_id',$id);
        return $this->db->update('proyek',$data);
    }
}
