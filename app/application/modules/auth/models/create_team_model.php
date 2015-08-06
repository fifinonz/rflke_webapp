<?php

Class Create_team_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->config('auth/ion_auth', TRUE);
        $this->load->helper('cookie');
        $this->load->helper('date');
        $this->lang->load('auth/ion_auth');

        // initialize db tables data
        $this->tables = $this->config->item('tables', 'ion_auth');

        //initialize data
//        $this->identity_column = $this->config->item('identity', 'ion_auth');
//        $this->store_salt      = $this->config->item('store_salt', 'ion_auth');
//        $this->salt_length     = $this->config->item('salt_length', 'ion_auth');
        $this->join = $this->config->item('join', 'ion_auth');

    }

    // Insert team data into database
    public function registration_create_team($team_name,$team_captain)
    {

// Query to check whether name already exist or not
//       $condition = "team_name =" . "'" . $data['team_name'] . "'";

        //   $team_captain = $this->ion_auth->user()->row()->id;
        $this->db->select('team_name');
        $this->db->from('team');
        $this->db->limit(1);
        $query = $this->db->get();
////        $this->db->where($condition);
//        $this->db->where('team', $team_name);
//
        $data=array('team_name' => $team_name,
            'team_captain' => $team_captain,
            );
        if ($query->num_rows() == 0) {

// Query to insert data in database

            $this->db->insert('team', $data);


            return ($this->db->affected_rows() != 1) ? false : true;

        }
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

// Read data from database to show data on teams page
    public function read_team_information() {
        $team_name=$this->input->post('team_name');
        $condition = "team_name =" . "'" . $team_name . "'";
        $this->db->select('*');
        $this->db->from('team');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1)
        {
            return $query->result();
        } else
        {
            return false;
        }
    }



// Add New Team Member
    public function registration_insert_member(){


        // validate form input
        $this->form_validation->set_rules('team_name', $this->lang->line('create_member_validation_tname_label'), 'required');
        $this->form_validation->set_rules('size_id', $this->lang->line('create_member_validation_sname_label'), 'required');
        $this->form_validation->set_rules('participate_id', $this->lang->line('create_member_validation_participate_label'), 'required');
        $this->form_validation->set_rules('mpesa_code', $this->lang->line('create_member_validation_mpesa_label'), 'required');

        $team_name=$this->input->post('team_name');
        $id=$this->ion_auth->user()->row()->id;
        $teamID=$this->db->get_where('team',array('team_name',$team_name));
        $tsize=$this->input->post('size_id');
        $participate=$this->input->post('participate_id');
        $mpesa=$this->input->post('mpesa_code');
        $query = $this->db->get();

        if ($query->num_rows() == 0) {

// Query to insert data in database

            $data= array(
                'id'=>$id,
                'teamID'=>$teamID,
                'size_id' => $tsize,
                'participate_id' => $participate,
                'mpesa_code'=>$mpesa,
                );

            $this->db->insert('user', $data);

            return ($this->db->affected_rows() != 1) ? false : true;

        }
    }

}

