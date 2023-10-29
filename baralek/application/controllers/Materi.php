<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller {
	public function index()
	{
        $this->load->view('templates/head');
		$this->load->view("templates/script");
        $this->load->view('templates/header');
		$this->load->view('materi');
		$this->load->view('templates/footer');
	}
}