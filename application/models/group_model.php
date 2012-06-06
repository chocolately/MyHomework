<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
	
class Group extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
	/**
	 * 通过group对象hid获取assignment对象
	 */
	function get_group_by_gid($gid, $table = 'group')
	{
		$this->db->where('hid', $gid);
		return $this->db->get($table);
	}
	
	/**
     * 添加一次作业,向数据表插入数据 $data 数组或者对象
     * @return bool
     */
    function add_group($data, $table = 'group') {
        $data['create_date'] = date("Y-m-d");
        if (!$this->db->insert($table, $data))
            return false;
        return true;
    }
	
	/**
     *
     * @return 成功则返回true
     */
    function delete_group_by_gid($gid, $table = 'group') {
        $this->db->where('gid', $gid);
        if (!$this->db->delete($table))
            return false;
        return true;
    }
}

?>