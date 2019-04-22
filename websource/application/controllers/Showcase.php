<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Showcase extends CI_Controller {

	public function index()
	{		
		$this->load->view('home/index');
	}

	public function slideshow($target_index)
	{	
		if ($target_index == 4) $next_index = 0;
		else $next_index = $target_index + 1;

		$data['target_index'] = $target_index;
		$data['next_index'] = $next_index;

		$this->load->model('showcase_model');
		$data['visitor_array'] = $this->showcase_model->get_recent_5();

		if ($data['visitor_array'][0]['location'] == "sc-akl"  ||
			$data['visitor_array'][0]['location'] == "sc-wtn"  ||
			$data['visitor_array'][0]['location'] == "sc-chch" || 
			$data['visitor_array'][0]['location'] == "sc-test" )
		{
			$this->load->view('slideshow/showcase', $data);
		}
		else if ($data['visitor_array'][0]['location'] == "golfday")
		{
			$this->load->view('slideshow/golfday', $data);
		}
	}

	public function flyer($external_id)
	{	
		$this->load->model('showcase_model');

		$data['title'] = 'Flyer - ' . $external_id;
		$data['visitor_row'] = $this->showcase_model->get_entry($external_id);

		if ($data['visitor_row']['location'] == "sc-akl"  ||
			$data['visitor_row']['location'] == "sc-wtn"  ||
			$data['visitor_row']['location'] == "sc-chch" ||
			$data['visitor_row']['location'] == "sc-test" )
		{
			$this->load->view('flyer/showcase', $data);
		}
		else if ($data['visitor_row']['location'] == "golfday")
		{
			$this->load->view('flyer/golfday', $data);
		}
	}

	public function download($external_id)
	{	
		$this->load->model('showcase_model');

		$data['title'] = 'Download - ' . $external_id;
		$data['visitor_row'] = $this->showcase_model->get_entry($external_id);

		$this->load->view('photo/redirect', $data);
	}

	public function leads($location = NULL)
	{	
		$this->load->model('showcase_model');
		$data['visitor_array'] = $this->showcase_model->get_report($location);
		
		$this->load->view('leads/index', $data);
	}	
}