<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	public function search($search=NULL)
	{
		$data["q"] = $search;
		$data["url"] = current_url();
		$makan['enak'] = "kerja dulu gblk";
		$this->load->view('search', $data);
	}

	public function category($category=NULL)
	{
		$data["q"] = $category;
		$data["url"] = current_url();
		$this->load->view('search', $data);
	}

	public function download()
	{
		$this->load->view('download');
	}
}
