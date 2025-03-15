<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$global_header_data = [
			"page" => "home"
		];
		$this->load->view('components/global_header' , $global_header_data);
		$this->load->view('home');
		$this->load->view('components/global_footer');
	}

	public function about()
	{
		$global_header_data = [
			"page" => "about"
		];
		$this->load->view('components/global_header' , $global_header_data);
		$this->load->view('components/global_header');
		$this->load->view('about');
		$this->load->view('components/global_footer');
	}
}
