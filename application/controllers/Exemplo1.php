<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exemplo1 extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Exemplo1_model', 'exemplo1');
    }

	public function index()
	{
        $dados['titulo'] = "Primeira VIEW";
        $dados['content'] = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. A adipisci magnam, vel suscipit, fuga deleniti omnis vero magni, nostrum inventore repellendus? Quaerat minus repudiandae sed necessitatibus voluptatum, ad molestiae et!";
		$this->load->view("exemplo1", $dados);
	}

    public function login()
    {
        $name = $this->uri->segment(3);

        $status = ($name != NULL ? $this->exemplo1->salvar($name) : 400);

        echo "<br>".$status;
    }


}
