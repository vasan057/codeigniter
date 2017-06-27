<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class exammodel extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}
	public function form_insert($data)
	{
		$this->db->insert('login', $data);
		
	}
	public function gettable()
	{
		//$this->db->select('name, email, password');
		return $this->db->get('login');
	}
	public function selectvalue($data)
	{
		$this->db->where('sno', $data);
		return $this->db->get('login');
	}
	public function updatevalue($data)
	{
		$this->db->where('sno',$data['sno']);
        $this->db->update('login',$data);
	}
	public function deletevalue($data)
	{
		$this->db->where('sno',$data['sno']);
        $this->db->delete('login',$data);
	}
}