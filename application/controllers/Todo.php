<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todo extends CI_Controller {

	public function index()
	{
		$this->load->model('Todo_model');
		$data['todo'] = $this->Todo_model->getTodo();
		$this->load->view('index', $data);
	}

	public function insert()
	{
		$this->load->view('insert');
	}

	public function add() {
		$todo = $this->input->post('todo');
		$this->load->model('Todo_model');
		$todo = array('nama_todo' => $todo,
					  'status' => 0 );
		$status = $this->Todo_model->insertTodo($todo);
		if ($status) {
			$this->session->set_flashdata('status', '<h3 style="color: blue;">Todo berhasil di tambahkan</h3>');
		}else{
			$this->session->set_flashdata('status', '<h3 style="color: red;">Todo gagal di tambahkan</h3>');
		}
		$data['todo'] = $this->Todo_model->getTodo();
		$this->load->view('index', $data);
	}

	public function selesai($id) {
		$this->load->model('Todo_model');
		$status = $this->Todo_model->updateTodo($id);
		if ($status) {
			$this->session->set_flashdata('status', '<h3 style="color: blue;">Todo berhasil di selesaikan</h3>');
		}else{
			$this->session->set_flashdata('status', '<h3 style="color: red;">Todo gagal di selesaikan, Server Error.</h3>');
		}
		redirect('todo');
	}

	public function hapus($id) {
		$this->load->model('Todo_model');
		$status = $this->Todo_model->hapusTodo($id);
		if ($status) {
			$this->session->set_flashdata('status', '<h3 style="color: blue;">Todo berhasil di hapus</h3>');
		}else{
			$this->session->set_flashdata('status', '<h3 style="color: red;">Todo gagal di hapus, Server Error.</h3>');
		}
		redirect('todo');
	}

	public function undo($id) {
		$this->load->model('Todo_model');
		$status = $this->Todo_model->undoTodo($id);
		if ($status) {
			$this->session->set_flashdata('status', '<h3 style="color: blue;">Todo berhasil di undo</h3>');
		}else{
			$this->session->set_flashdata('status', '<h3 style="color: red;">Todo gagal di undo, Server Error.</h3>');
		}
		redirect('todo');	
	}
}
