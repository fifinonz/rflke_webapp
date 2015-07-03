<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App_model extends CI_Model {
    // Function to retrieve an array with all product information
    function retrieve_products(){
        $query = $this->db->get('product'); // Select the table product
        return $query->result_array(); // Return the results in a array.
    }

}

/* End of file app_model.php */
/* Location: ./application/models/app_model.php */