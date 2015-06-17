<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Relay extends CI_Controller {
	private $data;

	function __construct(){
		parent::__construct();
		$this->load->library('Cphpmailer');

		$this->load->model('app_model');
	}
}