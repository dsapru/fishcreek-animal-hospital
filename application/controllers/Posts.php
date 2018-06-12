<?php
	class Posts extends CI_Controller{
		public function services(){
			$data['services'] = $this->post_model->get_posts();
			$this->load->view('templates/header');
			$this->load->view('posts/services', $data);
			$this->load->view('templates/footer');	
		}
		public function questions(){
			$data['questions'] = $this->post_model->vet_posts();
			$this->load->view('templates/header');
			$this->load->view('posts/questions', $data);
			$this->load->view('templates/footer');
		}
		public function create(){
			$this->form_validation->set_rules('myName', 'Name', 'required','xss_clean');
			$this->form_validation->set_rules('myEmail', 'Email', 'required','xss_clean');
			$this->form_validation->set_rules('myComments', 'Comments', 'required','xss_clean');
			
			if($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/header');
				$this->load->view('posts/create');
				$this->load->view('templates/footer');
			}
			else
			{
				$this->post_model->create_post();
				redirect('home');
			}
			}
			
			public function subscribe(){
			$data['servicename'] = $this->post_model->get_posts1();
			$this->form_validation->set_rules('ClientName', 'Name', 'required','regex_match[/^[a-zA-Z ]*$/]','xss_clean');
			$this->form_validation->set_rules('Address', 'Address', 'required','xss_clean');
			$this->form_validation->set_rules('mail', 'mail', 'required','regex_match[^\w+@[a-zA-Z_]+?\.[a-zA-Z]]','xss_clean');
			$this->form_validation->set_rules('Phone', 'Phone', 'required','regex_match[/^[0-9]*$/]','xss_clean');
			$this->form_validation->set_rules('Password', 'Password', 'required','min_length[8]', 'max_length[16]', 'regex_match[/^(?=.*[a-z])(?=.*[A-Z])[a-zA-Z0-9]$/]','xss_clean');
			$this->form_validation->set_rules('tos', 'tos', 'required','xss_clean');
			$this->form_validation->set_rules('pet', 'pet', 'required','xss_clean');
			if($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/header');
				$this->load->view('posts/subscribe',$data);
				$this->load->view('templates/footer');
			}
			else
			{
				
				$this->post_model->subscribe_post();
				redirect('home');
			}
			}

	}