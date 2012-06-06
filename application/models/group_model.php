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
	 * ͨ��group����hid��ȡassignment����
	 */
	function get_group_by_gid($gid, $table = 'group')
	{
		$this->db->where('hid', $gid);
		return $this->db->get($table);
	}
	
	/**
     * ���һ����ҵ,�����ݱ�������� $data ������߶���
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
     * @return �ɹ��򷵻�true
     */
    function delete_group_by_gid($gid, $table = 'group') {
        $this->db->where('gid', $gid);
        if (!$this->db->delete($table))
            return false;
        return true;
    }
}

?>