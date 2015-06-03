<?php

class Blog extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function posts(){
		$this->db->select('post_title, post_date, post_content, guid, post_type');
		$this->db->from('wp_posts');
		$this->db->where('post_status', 'publish');
		$this->db->where('post_type', 'post');
		$this->db->order_by("post_date", "desc");
		$this->db->limit(6);

		$query = $this->db->get();


		return $query->result();
	}

}

?>
