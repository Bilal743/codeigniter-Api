<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardMod extends CI_Model {


	public function create($options = array())
	{
		 $this->load->database();
		$this->db->insert('users',$options);
		//return $this->db->insert_id();
	}


	public function addDriver($options = array())
	{
		 $this->load->database();
		$this->db->insert('drivers',$options);
		//return $this->db->insert_id();
	}

	public function addShop($options = array())
	{
		 $this->load->database();
		$this->db->insert('shops',$options);
		//return $this->db->insert_id();
	}



	public function getAgents()
	{

		$this->load->database();
		
		$q=$this->db->get('users');


	 return $result=$q->result();



		
	}

	public function getDrivers()
	{

		$this->load->database();
		
		$q=$this->db->get('drivers');


	 return $result=$q->result();



		
	}

	public function getShops()
	{

		$this->load->database();
		
		$q=$this->db->get('shops');


	 return $result=$q->result();



		
	}



	public function deleteDriver($id)
	{
		$this->load->database();
		echo $id;
		
		$this->db->where('id',$id)
				 ->delete('drivers');

	} 

	public function deleteAgents($id)
	{
		$this->load->database();
		echo $id;
		
		$this->db->where('id',$id)
				 ->delete('users');

	}


	public function edit($id)
	{
		// $edit=array();

		$this->load->database();
		$edit=$this->db
		->select(['id','name','phone','email','password','postcode','address',])
		->from('users')
		->where('id',$id)
		->get();
		
		return $result=$edit->result();
	}


	public function EditedData($update_id)
	{
		$updateData = array(

        
        'name' => $this->input->post('name'),
        'phone' => $this->input->post('phone'),
        'email' => $this->input->post('email'),
        'password' => $this->input->post('password'),
        'postcode' => $this->input->post('postcode'),
        'address' => $this->input->post('address'),
        
        
                );
		 $this->load->database();

		$this->db->where('id',$update_id)
				 ->update('users',$updateData);
				 
		
	}





	

}

/* End of file dashboardMod.php */
/* Location: ./application/models/dashboardMod.php */