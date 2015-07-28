<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start(); //we need to start session in order to access it through CI

class Relay extends MY_Controller {


/*    Required Libraries    */

	function __construct(){
		parent::__construct();
		$this->load->library('Cphpmailer');
        $this->load->database();
        $this->load->library('cart');
        $this->load->library('session');
        $this->load->library('encrypt');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
//		$this->load->model('app_model');
        $this->load->model('login_database');
	}


    /*  Page Controllers    */

	public function index(){
		$this->home();
	}

    public function home(){
//        $this->data['products'] = $this->app_model->retrieve_products(); // retrieve an array with all products
        $this->data['title'] 	= "Home Relay";
        $this->data['main_content'] 	= "home";

        $this->_load_view();
    }

    /* Secured Home Page */
    public function my_home(){

        $this->data['title'] 	= "Home Relay";
        $this->data['secure_content'] 	= "relay/home";

        $this->_secured_load_view();
    }

    /* USER REGISTRATION*/

    public function log_in (){
        $this->data['title'] 	= "Log In";
        $this->data['main_content'] 	= "login_form";

        $this->_load_view();
    }

    public function user_registration_show(){
        $this->data['title'] 	= "Sign Up";
        $this->data['main_content'] 	= "registration_form";

        $this->_load_view();
    }

    public function new_team_registration(){
        $this->data['title'] 	= "Admin Panel";
        $this->data['main_content'] 	= "join_team";

        $this->_load_view();
    }

    public function create_new_team(){
        $this->data['title'] 	= "Admin Panel";
        $this->data['main_content'] 	= "create_team";

        $this->_load_view();
    }

    // Validate and store registration data in database
    public function new_user_registration() {

// Check validation for user input in SignUp form
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('inc/header');
            $this->load->view('registration_form');
            $this->load->view('inc/footer');
        } else {
            $data = array(
                'user_name' => $this->input->post('username'),
                'user_email' => $this->input->post('email_value'),
                'user_password' => $this->input->post('password')
            );
            $result = $this->login_database->registration_insert($data);
            if ($result == TRUE) {
                $data['message_display'] = 'Registration Successful !';
                $this->load->view('inc/header');
                $this->load->view('login_form', $data);
                $this->load->view('inc/footer');
            } else {
                $data['message_display'] = 'That username already exists!';
                $this->load->view('inc/header');
                $this->load->view('login_form', $data);
                $this->load->view('inc/footer');
            }
        }
    }

// Check for user login process
    public function user_login_process() {

        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            if(isset($this->session->userdata['logged_in'])){
                $this->load->view('inc/header');
                $this->load->view('home');
                $this->load->view('inc/footer');
            }else{
                $this->load->view('inc/header');
                $this->load->view('login_form');
                $this->load->view('inc/footer');
            }
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            $result = $this->login_database->login($data);
            if ($result == TRUE) {

                $username = $this->input->post('username');
                $result = $this->login_database->read_user_information($username);
                if ($result != false) {
                    $session_data = array(
                        'username' => $result[0]->user_name,
                        'email' => $result[0]->user_email,
                    );
// Add user data in session
                    $this->session->set_userdata('logged_in', $session_data);
                    $this->load->view('inc/header');
                    $this->load->view('home');
                    $this->load->view('inc/footer');
                }
            } else {
                $data = array(
                    'error_message' => 'Invalid Username or Password'
                );
                $this->load->view('inc/header');
                $this->load->view('login_form', $data);
                $this->load->view('inc/footer');
            }
        }
    }

// Logout from admin page
    public function logout() {

// Removing session data
        $sess_array = array(
            'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $data['message_display'] = 'Logout Successful. Log back in?';
        $this->load->view('inc/header');
        $this->load->view('login_form', $data);
        $this->load->view('inc/footer');
    }

/* VIEW CONTROLLERS*/
    public function what_is_relay()
    {
        $this->data['title'] 	= "About Us";
        $this->data['main_content'] 	= "about";

        $this->_load_view();

    }

    public function about(){
        $this->data['title'] 	= "About Relay";
        $this->data['main_content'] 	= "what-is-relay";

        $this->_load_view();
    }

    public function teams_2015(){
        $this->data['title'] 	= "Participate in Relay 2015";
        $this->data['main_content'] 	= "teams_2015";

        $this->_load_view();
    }

    public function join_team(){
        $this->data['title'] 	= "Participate in Relay 2015";
        $this->data['main_content'] 	= "join_team";

        $this->_load_view();
    }

    public function donate(){
        $this->data['title'] 	= "Make a Donation";
        $this->data['main_content'] 	= "donate";

        $this->_load_view();
    }
        /*      SHOPPING CART    */

//    public function buy_product(){
//        $this->data['products'] = $this->app_model->retrieve_products(); // retrieve an array with all products
//        $this->data['title'] 	= "Buy Products";
//        $this->data['main_content'] 	= "products";
//
//        $this->_load_view();
//    }
//
//    function add_cart_item(){
//
//        if($this->app_model->validate_add_cart_item() == TRUE){
//
//            // Check if user has javascript enabled
//            if($this->input->post('ajax') != '1'){
//                redirect('relay/buy_product'); // If javascript is not enabled, reload the page with new data
//            }else{
//                echo 'true'; // If javascript is enabled, return true, so the cart gets updated
//            }
//        }
//
//    }
//
//    function add_cart_item_home(){
//
//        if($this->app_model->validate_add_cart_item() == TRUE){
//
//            // Check if user has javascript enabled
//            if($this->input->post('ajax') != '1'){
//                redirect('relay/view_cart','refresh'); // If javascript is not enabled, reload the page with new data
//            }else{
//                echo 'true'; // If javascript is enabled, return true, so the cart gets updated
//            }
//        }
//
//    }
//
//    function update_cart(){
//        $this->app_model->validate_update_cart();
//        redirect('relay/view_cart/#');
//    }
//
//    public function view_cart(){
//        $this->data['title'] 	= "Buy Products";
//        $this->data['main_content'] 	= "cart.php";
//
//        $this->_load_view();
//    }
//
//    function empty_cart(){
//        $this->cart->destroy(); // Destroy all cart data
//        redirect('relay/view_cart'); // Refresh the page
//    }
//    public function checkout(){
//        $this->data['title'] 	= "Buy Products";
//        $this->data['main_content'] 	= "checkout.html";
//
//        $this->_load_view();
//    }
///////////////////             END SHOPPING CART               ////////////////////////////////////////////////////////////////////////////////

 /*    IMAGE GALLERY*/

    public function gallery_image(){
        $this->data['title'] 	= "Gallery";
        $this->data['main_content'] 	= "image-gallery.html";

        $this->_load_view();
    }

    public function resource_center(){
        $this->data['title'] 	= "Resource Center";
        $this->data['main_content'] 	= "resource-center.html";

        $this->_load_view();
    }

    public function faqs(){
        $this->data['title'] 	= "Frequently Asked Questions";
        $this->data['main_content'] 	= "faq.php";

        $this->_load_view();
    }

    public function contact_us(){
        $this->data['title'] 	= "Contact US";
        $this->data['main_content'] 	= "contact.php";

        $this->_load_view();
    }


    public function shujaa(){
        $this->data['title'] 	= "Mashujaa | Cancer Warriors";
        $this->data['main_content'] 	= "shujaa.html";

        $this->_load_view();
    }

    /*CONTACT US */


}