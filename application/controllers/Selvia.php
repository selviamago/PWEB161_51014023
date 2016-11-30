<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Selvia extends CI_Controller {

	
	public function index()
	{
		$this->load->view('hallo_selvia');
	}
}
