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


	public function home(){
		$this->data['title'] 	= "Home Relay";
		$this->data['content'] 	= "home";

		$this->_load_view();
	}

    public function about()
    {
        $this->data['title'] 	= "About Us";
        $this->data['content'] 	= "about";

        $this->_load_view();

    }

    public function about_relay(){
        $this->data['title'] 	= "About Relay";
        $this->data['content'] 	= "what-is-relay.html";

        $this->_load_view();
    }

    public function buy_product(){
        $this->data['title'] 	= "Buy Products";
        $this->data['content'] 	= "products.html";

        $this->_load_view();
    }
    public function view_cart(){
        $this->data['title'] 	= "Buy Products";
        $this->data['content'] 	= "cart.html";

        $this->_load_view();
    }

    public function checkout(){
        $this->data['title'] 	= "Buy Products";
        $this->data['content'] 	= "checkout.html";

        $this->_load_view();
    }

    public function gallery_image(){
        $this->data['title'] 	= "Gallery";
        $this->data['content'] 	= "image-gallery.html";

        $this->_load_view();
    }

    public function resource_center(){
        $this->data['title'] 	= "Resource Center";
        $this->data['content'] 	= "resource-center.html";

        $this->_load_view();
    }

    public function faqs(){
        $this->data['title'] 	= "Frequently Asked Questions";
        $this->data['content'] 	= "faq.html";

        $this->_load_view();
    }

    public function contact_us(){
        $this->data['title'] 	= "Contact US";
        $this->data['content'] 	= "contact.html";

        $this->_load_view();
    }

    public function shujaa(){
        $this->data['title'] 	= "Mashujaa | Cancer Warriors";
        $this->data['content'] 	= "shujaa.html";

        $this->_load_view();
    }
}