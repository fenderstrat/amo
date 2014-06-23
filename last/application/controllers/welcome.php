<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('md_artikel');
	}
	public function index()
	{
		$data['title'] = 'Komisi Pemilihan Umum Kabupaten Mukomuko';
		$data['artikel'] = $this->md_artikel->get_all('2')->result();
		$data['lain'] = $this->md_artikel->get_all('6')->result();
		$data['content'] = 'home';
		$this->load->view('index',$data);
	}

	public function artikel()
	{
		$data['artikel'] = $this->md_artikel->Get_id_news_all($this->uri->segment(3))->row();
		$data['title'] = $data['artikel']->judul.'KPU Mukomuko';
		$data['content'] = 'single';
		$this->load->view('index',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */