<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {


	public function __construct() {
                     parent::__construct();
                      $this->load->database();
                     $this->load->model('user_model');

             }    
             


	public function read(){



       $query = $this->db->query("select * from `users`");

       return $query->result_array();

   }


    public function insert($data){



       $this->user_name    = $data['user_name']; // please read the below note
       $this->user_phone    = $data['user_phone'];
       $this->user_email    = $data['user_email'];

       $this->user_password  = $data['user_password'];
       $this->user_address  = $data['user_address'];


       $this->user_type = $data['type'];



       if($this->db->insert('users',$this))

       {    

           return 'Data is inserted successfully';

       }




	

}

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */