<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* load the MX_Loader class */
require APPPATH."third_party/MX/Controller.php";




class MY_Controller extends MX_Controller
{
    protected $data;
       function __construct()
    {
        parent::__construct();
    }

    public function _load_view(){
        $this->load->view('inc/tmp',$this->data);
    }

    public function _secured_load_view(){
        $this->load->view('inc/tmp',$this->data);

    }
}