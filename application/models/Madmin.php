<?php
class Madmin extends CI_Model 
{
    function getAllAdmin(){
        return $this->db->get('admin')->result_array();
    }

    function insertAdmin($data){
        return $this->db->insert('admin',$data);
    }

    function getAdminById($id){
        return $this->db->get_where('admin',['admin_id' => $id])->row_array();
    }

    function updateAdmin($data,$id){
        $this->db->where('admin_id',$id);
        return $this->db->update('admin',$data);
    }
}
