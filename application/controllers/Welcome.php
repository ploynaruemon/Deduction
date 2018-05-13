<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('Temp/index');
	}
	public function myfunction($name = "")
	{
	    //$this->load->view('welcome_message');
	    echo "myfunction ".$name;
	}
}
