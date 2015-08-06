<?php

Class Create_team_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->config('site_relay', TRUE);
        $this->load->helper('cookie');
        $this->load->helper('date');
        $this->lang->load('auth/ion_auth');

        // initialize db tables data
        $this->tables = $this->config->item('tables', 'site_relay');

        //initialize data
//        $this->identity_column = $this->config->item('identity', 'ion_auth');
//        $this->store_salt      = $this->config->item('store_salt', 'ion_auth');
//        $this->salt_length     = $this->config->item('salt_length', 'ion_auth');
        $this->join = $this->config->item('join', 'site_relay');

    }

// Insert team data into database
    public function registration_insert_team($data)
    {

// Query to check whether name already exist or not
//        $condition = "team_name =" . "'" . $data['team_name'] . "'";
        $query = $this->db->get($this->tables['team']);
        $team_captain = $this->ion_auth->user()->row()->id;
        $this->db->select('*');
        $this->db->from('team');
        $this->db->where('team_name',$this->data);
        $this->db->limit(1);
        if ($query->num_rows() == 0) {

// Query to insert data in database

            $this->db->insert($this->tables['team'], array(
                'team_name' => $data['team_name'],
                'team_captain' => $team_captain,

            ));

            return ($this->db->affected_rows() != 1) ? false : true;

        }


//// Show team members using team name
//    public function login($data) {
//
//        $condition = "team_name =" . "'" . $data['team_name'] . "' AND " . "user_password =" . "'" . $data['password'] . "'";
//        $this->db->select('*');
//        $this->db->from('user_login');
//        $this->db->where($condition);
//        $this->db->limit(1);
//        $query = $this->db->get();
//
//        if ($query->num_rows() == 1) {
//            return true;
//        } else {
//            return false;
//        }
//    }
//
//// Read data from database to show data on teams page
//    public function read_team_information($team_name) {
//
//        $condition = "team_name =" . "'" . $team_name . "'";
//        $this->db->select('*');
//        $this->db->from('team');
//        $this->db->where($condition);
//        $this->db->limit(1);
//        $query = $this->db->get();
//
//        if ($query->num_rows() == 1) {
//            return $query->result();
//        } else {
//            return false;
//        }
//    }

    }

// Add New Team Member
    public function registration_insert_member($data){



    }

}

