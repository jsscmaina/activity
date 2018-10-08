<?php
	class Task_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_tasks($slug = FALSE){
			if($slug===FALSE){
				$this->db->order_by('id', 'DESC');
				$query = $this->db->get('tasks');
				return $query->result_array();
			}
		}
//slug is the url version of the title
		public function add_task(){
			$slug=url_title($this->input->post('title'));

			$data= array('task'->input->post('task'),
				'slug'->$slug,
				'date'->$this->input->post('date'),
				'priority'->$this->input->post('priority')
		);
			return $this->db->insert('tasks',$data);
		}

		public function delete_post($id){
			$this->db->where('id', $id);
			$this->db->delete('tasks');
			return true;
		}
		public function update_post(){
			$slug=url_title($this->input->post('title'));

			$data= array('title' ->input->post('title'),
				'slug'->$slug,
				'body'->$this->input->post('priority')
		);
			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('tasks',$data);
		}
	}
?>