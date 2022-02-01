<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Games extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$this->load->model("games_model");
		
		$data["games"] = $this->games_model->index();
        $data["title"] = "Games - Codeigniter";
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/games', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);

	}

	public function new()
	{
		$data["title"] = "Form - Games";
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav-top', $data);
		$this->load->view('pages/form-games', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/js', $data);
	}

	public function store($data = NULL)
	{
		if($data == NULL)
		{
			$game = $_POST;
			$this->load->model("games_model");
			$this->games_model->store($game);
		}
		else {
			# code...
		}

	}

	
}
