<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->helper('url_helper');
	}
	public function index()
	{
		$this->load->view('templates/head', null );
		$this->load->view('hello');
		$this->load->view('templates/foot' );
	}
}
