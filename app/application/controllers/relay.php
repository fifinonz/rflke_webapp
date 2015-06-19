<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Relay extends CI_Controller {
	private $data;

	function __construct(){
		parent::__construct();
		$this->load->library('Cphpmailer');

		$this->load->model('app_model');
	}

	public function _load_view(){
		$this->load->view('inc/tmp',$this->data);
	}

	public function index(){
		$this->home();
	}
    public function about()
    {
        $this->data['title'] 	= "Home Relay";
        $this->data['content'] 	= "about";

        $this->_load_view();

    }

	public function home(){
		$this->data['title'] 	= "Home Relay";
		$this->data['content'] 	= "home";

		$this->_load_view();
	}
}