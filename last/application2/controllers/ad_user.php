<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ad_user extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Pengolahan User';
		$data['content'] = 'user';
		$data['active'] = 'user';
		$this->load->view('administrator/index', $data);		
	}
	public function edit()
	{
		$data['title'] = 'Edit Data User';
		$data['content'] = 'user_edit';
		$data['active'] = 'user';
		$this->load->view('administrator/index', $data);
	}

}

/* End of file ad_user.php */
/* Location: ./application/controllers/ad_user.php */