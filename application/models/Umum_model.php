<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Umum_model extends CI_Model
{
	public function __construct(){
		$this->load->database();
	}

	public function tampil($table)
	{
		$this->db->order_by("id", "asc");
		return $this->db->get($table);
	}
	public function tampil_filter($table,$where)
	{
		$this->db->order_by("id", "asc");
		$this->db->where($where);
		return $this->db->get($table);
	}
	public function input_data($table,$data){
		$this->db->insert($table,$data);
	}

	public function edit_data($table,$where){
		return $this->db->get_where($table,$where);
	}
	public function update($table,$data,$where){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function delete($table,$data,$where){
	$this->db->where($where,$data[$where]);
	$this->db->delete($table,$data);
	}
	public function delete_multi($table,$data,$where){
	$this->db->where($where);
	$this->db->delete($table,$data);
	}
	public function total_data($where)
	{
		$this->db->select('*');
		$this->db->from($where);
		return $this->db->count_all_results();
	}
	public function delete_all($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	

}