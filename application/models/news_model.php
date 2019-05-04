<?php

class News_model extends CI_Model {

	public function __construct()
	{
			$this->load->database();
	}
	//
	public function get_news($slug = FALSE)
	{
		if ($slug === FALSE)
		{
				$query = $this->db->get('news');
				return $query->result_array();
		}

		$query = $this->db->get_where('news', array('slug' => $slug));
		return $query->row_array();
	}
	//
	public function set_news()
	{
		$this->load->helper('url');
	
		$slug = url_title($this->input->post('title'), 'dash', TRUE);
	
		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'text' => $this->input->post('text')
		);
	
		return $this->db->insert('news', $data);
	}
	//
	public function update_news( $slug )
	{
		$this->load->helper('url');
//		$slug = url_title($this->input->post('title'), 'dash', TRUE);
//var_dump($slug );
//exit();
		$data = array(
			'title' => $this->input->post('title'),
			//'slug' => $slug,
			'text' => $this->input->post('text')
		);
		$where = array(
			'slug' => $slug
		);

		return $this->db->update('news', $data, $where);
	}	


}

