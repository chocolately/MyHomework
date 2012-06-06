<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
	
class Homework_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
	function get_homework_by_hid($hid, $table = 'homework')
	{
		$this->db->where('hid', $hid);
		return $this->db->get($table);
	}
	
	function get_all_homework($table = "homework") 
	{
		return $this->db->get($table);
	}
	
    function add_homework($data, $table = 'homework') 
    {
		$data['create_time'] = date("Y-m-d");
		$data['edit_time'] = date("Y-m-d");
        if (!$this->db->insert($table, $data))
            return false;
        return true;
    }
	
    function delete_homework_by_hid($hid, $table = 'homework') 
    {
        $this->db->where('hid', $hid);
        if (!$this->db->delete($table))
            return false;
        return true;
    }
}

?>