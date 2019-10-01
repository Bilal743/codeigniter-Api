<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
   use Restserver\Libraries\REST_Controller;

class Test extends REST_Controller {


	public function __construct() {
       parent::__construct();
       $this->load->database();





}


 /**
     * Get All Data from this method.
     *
     * @return Response
    */
	public function index_get($id = 0)
	{
        if(!empty($id)){
            $data = $this->db->get_where("users", ['id' => $id])->row_array();

        }

        else{
            $data = $this->db->get("users")->result();
        }
     
        $this->response($data, REST_Controller::HTTP_OK);


	}





  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_post()
    {
        $input = $this->input->post();
        $this->db->insert('users',$input);
     
        $this->response(['User created successfully.'], REST_Controller::HTTP_OK);
    } 












    public function index_put($id)
    {
        $input = $this->put();
    
        $this->db->update('users', $input, array('id'=>$id));
     
        $this->response(['user updated successfully.'], REST_Controller::HTTP_OK);
    }



        /**
         * Get All Data from this method.
         *
         * @return Response
        */
        public function index_delete($id)
        {
            $this->db->delete('users', array('id'=>$id));
           
            $this->response(['User deleted successfully.'], REST_Controller::HTTP_OK);
        }








       

}

/* End of file Test.php */
/* Location: ./application/controllers/Test.php */