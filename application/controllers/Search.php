<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index()
	{
		$this->load->model('search_model');
		$id = $this->input->get('id');
		$data = $this->search_model->ambil_data($id);
		$data = array(
			'id'	=> $id,
			'data'		=> $data
		);
		$this->load->view('article_view',$data);
	}

}