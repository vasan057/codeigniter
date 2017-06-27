<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class sreeni extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
        $this->load->database();
        $this->load->model("exammodel");
	}
	public function index()
	{
		$this->load->view('sreeni');
	}
	public function insert()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		//Validating Name Field
		$this->form_validation->set_rules('name', 'Username', 'required|min_length[5]|max_length[15]');

		//Validating Email Field
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if ($this->form_validation->run() == FALSE) {

				$this->load->view('sreeni');
			} 
		else 
		{
			$data = array(
							'name'	   =>$this->input->post('name'),

							'email'    =>$this->input->post('email'),

							'password' =>$this->input->post('password')
						);
			
			$this->exammodel->form_insert($data);
			$data['message'] = 'Data Inserted Successfully';
			$this->load->view('sreeni', $data);
		}
	}
	public function test()
	{
		$a ='51';
		$b = &$a;
		$b = "2$b";
		echo $b;
	}
	public function table()
	{
		$table['table'] = $this->exammodel->gettable();
		$sno = 1;
		foreach ($table['table']->result() as $key) {
			$key->sno = $sno;
			$sno++;
		}
		$this->load->view('tables',$table);
	}
	public function edit($data)
	{
		$datas['data'] = $this->exammodel->selectvalue($data);
		$this->load->view('update',$datas);
	}
	public function testupdate()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		//Validating Name Field
		$this->form_validation->set_rules('name', 'Username', 'required|min_length[5]|max_length[15]');

		//Validating Email Field
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if ($this->form_validation->run() == FALSE) {

				$this->load->view('sreeni');
			} 
		else 
		{
			$data = array(
							'sno'      =>$this->input->post('id'),

							'name'	   =>$this->input->post('name'),

							'email'    =>$this->input->post('email'),

							'password' =>$this->input->post('password')
						);
			$this->exammodel->updatevalue($data);
			/*return $this->config->base_url()."sreeni/table";*/
			$this->session->set_flashdata('item', 'Successfully updated');
			redirect('sreeni/table');
		}	
	}
	public function delete($data)
	{
		$data = array('sno'=>$data);
		$this->exammodel->deletevalue($data);
		$this->session->set_flashdata('item', 'Successfully Delete');
			redirect('sreeni/table');
	}
}