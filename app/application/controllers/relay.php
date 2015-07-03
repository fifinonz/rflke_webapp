<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Relay extends CI_Controller {
	private $data;

/*    Required Libraries    */

	function __construct(){
		parent::__construct();
		$this->load->library('Cphpmailer');
        $this->load->database();
        $this->load->library('cart');
        $this->load->library('session');
        $this->load->library('encrypt');
        $this->load->helper('form');
		$this->load->model('app_model');
	}

	public function _load_view(){
		$this->load->view('inc/tmp',$this->data);
	}

    /*  Page Controllers    */

	public function index(){
		$this->home();
	}

    public function log_in (){
        $this->data['title'] 	= "Log In";
        $this->data['content'] 	= "login";

        $this->_load_view();
    }

    public function sign_up(){
        $this->data['title'] 	= "Sign Up";
        $this->data['content'] 	= "sign_up";

        $this->_load_view();
    }
	public function home(){
        $this->data['products'] = $this->app_model->retrieve_products(); // retrieve an array with all products
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

    public function teams_2015(){
        $this->data['title'] 	= "Participate in Relay 2015";
        $this->data['content'] 	= "teams_2015.html";

        $this->_load_view();
    }

    public function join_team(){
        $this->data['title'] 	= "Participate in Relay 2015";
        $this->data['content'] 	= "join_team";

        $this->_load_view();
    }

    public function donate(){
        $this->data['title'] 	= "Make a Donation";
        $this->data['content'] 	= "donate.html";

        $this->_load_view();
    }
        /*      SHOPPING CART    */

    public function buy_product(){
        $this->data['products'] = $this->app_model->retrieve_products(); // retrieve an array with all products
        $this->data['title'] 	= "Buy Products";
        $this->data['content'] 	= "products.php";

        $this->_load_view();
    }

    function add_cart_item(){

        if($this->app_model->validate_add_cart_item() == TRUE){

            // Check if user has javascript enabled
            if($this->input->post('ajax') != '1'){
                redirect('relay/buy_product'); // If javascript is not enabled, reload the page with new data
            }else{
                echo 'true'; // If javascript is enabled, return true, so the cart gets updated
            }
        }

    }

    function add_cart_item_home(){

        if($this->app_model->validate_add_cart_item() == TRUE){

            // Check if user has javascript enabled
            if($this->input->post('ajax') != '1'){
                redirect('relay/view_cart','refresh'); // If javascript is not enabled, reload the page with new data
            }else{
                echo 'true'; // If javascript is enabled, return true, so the cart gets updated
            }
        }

    }

    function update_cart(){
        $this->app_model->validate_update_cart();
        redirect('relay/view_cart/#');
    }

    public function view_cart(){
        $this->data['title'] 	= "Buy Products";
        $this->data['content'] 	= "cart.php";

        $this->_load_view();
    }

    function empty_cart(){
        $this->cart->destroy(); // Destroy all cart data
        redirect('relay/view_cart'); // Refresh the page
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