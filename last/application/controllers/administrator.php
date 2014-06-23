<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrator extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('md_user');
	}

	public function index()
	{
		if($this->session->userdata('admin')){
			$data['title'] = 'Dashboard Administrator';
			$data['content'] = 'dashboard';
			$data['active'] = 'dashboard';
			$this->load->view('administrator/index', $data);
		 } else {
		 	redirect('administrator/login');
		 }
	}

	public function login()
	{
		if($this->session->userdata('admin')){
			redirect('administrator');
		} else {
			// cek login
			$this->form_validation->set_rules('username', 'Nama Pengguna', 'required|trim|xss_clean');
			$this->form_validation->set_rules('password', 'Kata Kunci', 'required|trim|xss_clean');

			if($this->form_validation->run()==FALSE){
				$data['title'] = 'Login Administrator';
			 	$data['content'] = 'login';
			 	$this->load->view('administrator/login', $data);
			} else {
				// cek login
				if ($this->md_user->get_user(strtolower($this->input->post('username')),md5($this->input->post('password')))->num_rows()==0){
					$this->session->set_flashdata('erorr', 'Nama Pengguna dan Kata Kunci Tidak Cocok');
					redirect('administrator/login');
				} else {
					$data['user'] = $this->md_user->get_user(strtolower($this->input->post('username')),md5($this->input->post('password')))->row();
					$this->session->set_userdata('userid',$data['user']->idUser);
					$this->session->set_userdata('admin',$data['user']->userName);
					$this->session->set_userdata('akses',$data['user']->akses);
					$this->session->set_userdata('images', $data['user']->photo);
					
					redirect('administrator');
				}
			}
		}
	}
	public function Logout()
	{
		if($this->uri->segment(3)=="" || $this->uri->segment(4)==""){
			show_404();
		} else {
			$data = array(
					'userid'=>'',
					'admin'=>'',
					'akses'=>'',
					'images'=>''
				);

			$this->session->unset_userdata($data);
			redirect('administrator/');
		}
	}

}

/* End of file administrator.php */
/* Location: ./application/controllers/administrator.php */