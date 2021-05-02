<?php
class Mlogin extends CI_Model{
	function __construct() {
        parent::__construct();
    }

    function get_auth($email){
    	return $this->db->get_where('admin',['email'=>$email])->row_array();
    }
    
    function get_auth_vendor($email){
        return $this->db->get_where('vendor',['email'=>$email])->row_array();
    }

}
