<?php
	class Pages extends CI_Controller{
		public function view($page='home'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();//in case an error occurs
			}

			$data['title'] = ucfirst($page); 
			$this-> load->view('pages/'.$page, $data);
			$this-> load->view('templates/footer');
		}
	}
	