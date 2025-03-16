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
		$this->load->view('about');
		$this->load->view('components/global_footer');
	}

	public function service()
	{
		$global_header_data = [
			"page" => "service"
		];
		$this->load->view('components/global_header' , $global_header_data);
		$this->load->view('service');
		$this->load->view('components/global_footer');
	}

	public function project()
	{
		$global_header_data = [
			"page" => "project"
		];
		$this->load->view('components/global_header' , $global_header_data);
		$this->load->view('project');
		$this->load->view('components/global_footer');
	}

	public function pricing()
	{
		$global_header_data = [
			"page" => "pricing"
		];
		$this->load->view('components/global_header' , $global_header_data);
		$this->load->view('pricing');
		$this->load->view('components/global_footer');
	}

	public function contact()
	{
		$global_header_data = [
			"page" => "contact"
		];
		$this->load->view('components/global_header' , $global_header_data);
		$this->load->view('contact');
		$this->load->view('components/global_footer');
	}

}
