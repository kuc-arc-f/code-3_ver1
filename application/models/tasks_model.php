<?php

class Tasks_model extends CI_Model {

	public function __construct()
	{
			$this->load->database();
	}
	//
	public function get_tasks($slug = FALSE)
	{
		if ($slug === FALSE)
		{
//			$this->db->where('id', 15);
			$this->db->order_by('id', 'desc');
			$query = $this->db->get('tasks');
			return $query->result_array();
		}

		$query = $this->db->get_where('tasks', array('id' => $slug));
		return $query->row_array();
	}
	//
	public function set_tasks()
	{
		$this->load->helper('url');
//		$slug = url_title($this->input->post('title'), 'dash', TRUE);
		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content')
		);
		return $this->db->insert('tasks', $data);
	}
	//
	public function update_content( $slug )
	{
		$this->load->helper('url');
//		$slug = url_title($this->input->post('title'), 'dash', TRUE);
//var_dump($slug );
//exit();
		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content')
		);
		$where = array(
			'slug' => $slug
		);

		return $this->db->update('news', $data, $where);
	}	


}

