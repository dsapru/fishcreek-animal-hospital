<?php
		class Post_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
	public function get_posts()
	{
			$query = $this->db->get('service');
			$this->db->select('servicename', 'description');
			return $query->result_array();

	}	
	public function vet_posts()
	{
			$query = $this->db->get('questions');
			$this->db->select('questions', 'answers');
			return $query->result_array();
	}

	public function create_post(){
			$data = array(
				'name' => $this->input->post('myName'),
				'email' => $this->input->post('myEmail'),
				'comments' => $this->input->post('myComments'),
							);
			return $this->db->insert('contact', $data);
		}
		    
public function get_posts1()
{
		$this->db->select('servicename'); 
		$query = $this->db->get('service'); 
		$results = $query->result();
}
	
public function get_posts2()
{
		$this->db->select('petname'); 
		$query = $this->db->get('pet'); 
		$results = $query->result();

}
}
?>