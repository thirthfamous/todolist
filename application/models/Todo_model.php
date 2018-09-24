<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todo_model extends CI_Model {

	public function getTodo(){
		return $this->db->get('todo')->result();
	}

	public function insertTodo($todo){
		$this->db->insert('todo', $todo);
		return $this->db->affected_rows();
	}	

	public function updateTodo($id) {
		$this->db->where('id_todo', $id);
		$this->db->update('todo', array('status' => 1 ));
		return $this->db->affected_rows();
	}

	public function undoTodo($id){
		$this->db->where('id_todo', $id);
		$this->db->update('todo', array('status' => 0 ));
		return $this->db->affected_rows();
	}

	public function hapusTodo($id) {
		$this->db->where('id_todo', $id);
		$this->db->delete('todo');
		return $this->db->affected_rows();
	}

	}
?>