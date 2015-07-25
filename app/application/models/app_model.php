<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App_model extends CI_Model {
    // Function to retrieve an array with all product information
//    function retrieve_products(){
//        $query = $this->db->get('product'); // Select the table product
//        return $query->result_array(); // Return the results in a array.
//    }
//
//    // Add an item to the cart
//    function validate_add_cart_item(){
//
////        TO DO:
////        1. CHECK IF ITEM IN CART & UPDATE, ELSE INSERT
//
//        $id = $this->input->post('productID'); // Assign posted product_id to $id
//        $cty = $this->input->post('quantity'); // Assign posted quantity to $cty
//
//        $this->db->where('productID', $id); // Select where id matches the posted id
//        $query = $this->db->get('product', 1); // Select the products where a match is found and limit the query by 1
//
//        // Check if a row has matches product id
//        if($query->num_rows > 0){
//
//            // We have a match!
//            foreach ($query->result() as $row)
//            {
//
//                // Create an array with product information
//                $data = array(
//                    'id'      => $id,
//                    'qty'     => $cty,
//                    'price'   => $row->unit_price,
//                    'name'    => $row->product_name
//                );
//
//                // Add the data to the cart using the insert from the cart library
//                $this->cart->insert($data);
//
//                return TRUE; // Finally return TRUE
//            }
//
//        }else{
//            // Nothing found! Return FALSE!
//            return FALSE;
//        }
//    }
//
//    // Updated the shopping cart
//    function validate_update_cart(){
//
//        // Get the total number of items in cart
//        $total = $this->cart->total_items();
//
//        // Retrieve the posted information
//        $item = $this->input->post('rowid');
//        $qty = $this->input->post('qty');
//
//        // Cycle through all items and update them
//        for ($i=0;$i < count($item); $i++)
//        {
//            // Create an array with the products rowid's and quantities.
//            $data = array(
//                'rowid' => $item[$i],
//                'qty'   => $qty[$i]
//            );
//
//            // Update the cart with the new information
//            $this->cart->update($data);
//        }
//
//    }
}

/* End of file app_model.php */
/* Location: ./application/models/app_model.php */