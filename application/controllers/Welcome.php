<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
		$this->load->database();
		// $this->load->model('Blog'); //cargamos modelo
		//
		// $data['posts'] = $this->Blog->posts();
		$this->db->select('post_title, post_date, post_content, guid, post_type');
		$this->db->from('wp_posts');
		$this->db->where('post_status', 'publish');
		$this->db->where('post_type', 'post');
		$this->db->order_by("post_date", "desc");
		$this->db->limit(6);

		$query = $this->db->get();

		$data['posts'] = $query->result();

		$this->load->view('welcome_message', $data);
	}



	public function contacto()
	{
		$this->load->helper('url');
		$this->load->view('contacto');


	}




}
