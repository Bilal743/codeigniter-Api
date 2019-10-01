<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {




	public function index()
	{

		$this->load->view('header');
		$this->load->view('dashboard_2');
		$this->load->view('footer');

		
	}


	public function add_agents()
	{
		
	    $this->load->view('header');
		$this->load->view('add-agents');
		$this->load->view('footer');

      
	}

	public function added_agents()
	{
		
		$this->load->view('header');

		$this->load->model('DashboardMod');
		$result['show']=$this->DashboardMod->getAgents();
		
 		$this->load->view('added-agents',$result);
		
	    
		
		$this->load->view('footer');

	}

	public function added_shops()
	{
		
		$this->load->view('header');

		$this->load->model('DashboardMod');
		$result['shop']=$this->DashboardMod->getShops();
		
 		$this->load->view('added-shops',$result);
		
	    
		
		$this->load->view('footer');

	}


	public function track_agents()
	{
		echo "Track Agents";
	}


	public function add_drivers()
	{
		
	    $this->load->view('header');
		$this->load->view('add-drivers');
		$this->load->view('footer');

      
	}

	public function added_drivers()
	{

		$this->load->view('header');

		$this->load->model('DashboardMod');
		$result['showDrivers']=$this->DashboardMod->getDrivers();
		
 		$this->load->view('added-drivers',$result);
		
	    
		
		$this->load->view('footer');


      
	}


	public function add_shops()
	{
		
	    $this->load->view('header');
		$this->load->view('add-shops');
		$this->load->view('footer');

      
	}


	// public function added_shops()
	// {
		
	//     $this->load->view('header');
	// 	$this->load->view('added-shops');
	// 	$this->load->view('footer');

      
	// }

	public function details()
	{
		
	    $this->load->view('header');
		$this->load->view('details');
		$this->load->view('footer');

      
	}






	public function addNewagent()
	{


		$this->load->helper('form');
		
		$this->load->model('DashboardMod');
		$submit=$this->input->post('submit');
		

		if (isset($submit)) {
			$options=array(
				'name'=>$this->input->post('name'),

				'phone'=>$this->input->post('phone'),
				'email'=>$this->input->post('email'),
				'password'=>$this->input->post('password'),
				'postcode'=>$this->input->post('postcode'),
				'address'=>$this->input->post('address'),
				);
			$this->DashboardMod->create($options);

			
			
		 }


		
 		$this->load->view('header');
		$this->load->view('add-agents');
		$this->load->view('footer');

	
	
}

public function addNewDriver()
	{


		$this->load->helper('form');
		
		$this->load->model('DashboardMod');
		$submit=$this->input->post('submit');
		

		if (isset($submit)) {
			$options=array(
				'name'=>$this->input->post('name'),

				'phone'=>$this->input->post('phone'),
				'email'=>$this->input->post('email'),
				'password'=>$this->input->post('password'),
				'postcode'=>$this->input->post('postcode'),
				'address'=>$this->input->post('address'),
				);
			$this->DashboardMod->addDriver($options);

			
			
		 }


		
 		$this->load->view('header');
		$this->load->view('add-drivers');
		$this->load->view('footer');

	
	
}

public function addNewshop()
	{


		
		
		$this->load->model('DashboardMod');
		$submit=$this->input->post('submit');
		

		if (isset($submit)) {
			$options=array(
				'name'=>$this->input->post('name'),

				'phone'=>$this->input->post('phone'),
				'email'=>$this->input->post('email'),
				'password'=>$this->input->post('password'),
				'postcode'=>$this->input->post('postcode'),
				'address'=>$this->input->post('address'),
				);
			$this->DashboardMod->addShop($options);

			
			
		 }


		
 		$this->load->view('header');
		$this->load->view('add-agents');
		$this->load->view('footer');

	
	
}



public function deleteAgents($delid)
 {
 	 


 	$this->load->model('DashboardMod');
 	

 	$this->DashboardMod->deleteAgents($delid);
 	redirect('Dashboard/added_drivers');
 	 


 	
 }

public function deleteDriver($delid)
 {
 	 


 	$this->load->model('DashboardMod');
 	

 	$this->DashboardMod->deleteDriver($delid);
 	redirect('Dashboard/added_drivers');
 	 


 	
 }


public function editAgents($id)
	{
		
		$this->load->view('header');
		$this->load->model('DashboardMod');
		
		$edit['data'] = $this->DashboardMod->edit($id);

		// echo '<pre>';
		// print_r($edit);
		// echo '</pre>';
		// echo Print_r($edit);
		
		$this->load->view('editAgents',$edit);
		$this->load->view('footer');

		
		
	} 

	public function editedAgents() {
            $id=$this->input->post('id');
            
            


   
           $this->load->model("DashboardMod");

            
            $data['result'] = $this->DashboardMod->EditedData($id);
            redirect('Dashboard/added_agents');


           
        }




        public function editShops($id)
	{
		
		$this->load->view('header');
		$this->load->model('DashboardMod');
		
		$edit['data'] = $this->DashboardMod->editShops($id);

		// echo '<pre>';
		// print_r($edit);
		// echo '</pre>';
		// echo Print_r($edit);
		
		$this->load->view('editShops',$edit);
		$this->load->view('footer');

		
		
	} 


	public function editedShops() {
            $id=$this->input->post('id');
            
            


   
           $this->load->model("DashboardMod");

            
            $data['result'] = $this->DashboardMod->EditedShops($id);
            redirect('Dashboard/added-shops');


           
        }









	
















	function send_email()
	{
		$config['protocol'] = 'SMTP';  
        $config['smtp_host'] = 'mail.mitbyte.com';
        $config['smtp_port'] = 465;
        $config['smtp_user'] = "info@mitbyte.com";
        $config['smtp_pass'] = "info@mitbyte";
        
        $this->load->library('email');
        $this->email->initialize($config);
   		$from_email = "info@mitbyte.com";
   		$this->email->set_newline("\r\n");
   		$this->email->from($from_email);
   		$this->email->set_mailtype("html");
   		$this->email->to('engrmatee01@gmail.com');
   		$this->email->subject('Testing the '.date('h:i:s'));
   		$this->email->message('Hi Its just a test msg');
   		//Send mail
   		if($this->email->send()){
       		echo "doneeeeeeeee";
   		}
   		else
   			echo "failed";


}


 }

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */