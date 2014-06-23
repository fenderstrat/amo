<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ad_artikel extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('md_artikel');
	}

	public function index()
	{
		$data['title'] = 'Tambah Artikel Baru';
		$data['content'] = 'artikel';
		$data['active'] = 'artikel';
		$this->load->view('administrator/index', $data);
	}
	public function create()
	{
		if($this->session->userdata('admin')){
			$this->form_validation->set_rules('jd', 'Judul Artikel', 'required|trim|xss_clean');
			$this->form_validation->set_rules('isi', 'Isi Artikel', 'required|trim');

			if($this->form_validation->run()==FALSE){
				$data['title'] = 'Tambah Artikel Baru';
				$data['content'] = 'artikel_create';
				$data['active'] = 'artikel';
				$this->load->view('administrator/index', $data);
			} else {
				if($_FILES['ico']['name']==""){
					$string = $this->input->post('tgl').':00';
					$dt = explode("/", $string);
					$a = explode(" ", $dt[2]);
					$tgl = $a[0].'-'.$dt[1].'-'.$dt[0].' '.$a[1];
					$postNews = array(
							'tanggal'=>$tgl,
							'judul'=>$this->input->post('jd'),
							'artikel'=>$this->input->post('isi'),
							'status'=>$this->input->post('sts'),
						);
					$ins_news = $this->md_artikel->insert($postNews);
					if($ins_news){
						$id = $this->md_artikel->get_last();
						$jum = $this->input->post('value');
						$this->session->set_flashdata('success', 'Artikel Baru Berhasil Ditambahkan');
						redirect('ad_artikel/create');
					} else {
						$this->session->set_flashdata('erro', 'Artikel Gagal Ditambahkan');
						redirect('ad_artikel/create');
					}
				} else {
					// feature image ada isinya
					$config['upload_path'] = 'assets/admin/images';
					$config['allowed_types'] = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';
					$config['max_size']	= '1000';
					$file = $_FILES['ico']['name'];
		            $a=explode('.', $file);
		            $ext = $a[count($a)-1];

		            $config['file_name']='Feature_img_'.preg_replace("![^a-z0-9]+!i", "-", $this->input->post('jd')).'.'.$ext;

					$this->load->library('upload', $config);
					if(! $this->upload->do_upload('ico')){
						// jika gagal
						$this->session->set_flashdata('error', $sub_data['error'] = $this->upload->display_errors());
						redirect('ad_artikel/create');		
					} else {
						$sub_data['result'] = $this->upload->data();			
						foreach($sub_data['result'] as $item=>$data){
							$items = $sub_data['result']['file_name'];
						}
						$string = $this->input->post('tgl').':00';
						$dt = explode("/", $string);
						$a = explode(" ", $dt[2]);
						$tgl = $a[0].'-'.$dt[1].'-'.$dt[0].' '.$a[1];
						$postNews = array(
								'tanggal'=>$tgl,
								'judul'=>$this->input->post('jd'),
								'artikel'=>$this->input->post('isi'),
								'status'=>$this->input->post('sts'),
								'image'=>$items,
							);
						$ins_news = $this->md_artikel->insert($postNews);
						if($ins_news){
							$id = $this->md_artikel->get_last();
							$jum = $this->input->post('value');
							$this->session->set_flashdata('success', 'Artikel Baru Berhasil Ditambahkan');
							redirect('ad_artikel/create');
						} else {
							$this->session->set_flashdata('erro', 'Artikel Gagal Ditambahkan');
							redirect('ad_artikel/create');
						}
					}
				}
			}
		} else {
			redirect('administrator/');
		}
	}

}

/* End of file ad_artikel.php */
/* Location: ./application/controllers/ad_artikel.php */