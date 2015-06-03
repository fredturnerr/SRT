<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function index()
  {
    $this->load->helper('url');

    $this->load->database();//Activamos la base de datos

    $this->load->model('blog'); //cargamos modelo

    $data['posts'] = $this->blog->posts();

    $this->load->view('home', $data);
  }
}
