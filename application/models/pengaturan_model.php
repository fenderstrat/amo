<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengaturan_model extends CI_Model {

	private $table = 'pengaturan';

	public function all()
	{
		return $this->db->get($this->table);
	}	

	public function save($post)
	{
		$post = array (
			'title' => $this->input->post('title'),
			'deskripsi' => $this->input->post('deskripsi'),
			'tag' => $this->input->post('tag'),
			'email' => $this->input->post('email'),
			'address' => $this->input->post('address'),
			'phone' => $this->input->post('phone'),
			'maps' => $this->input->post('maps')
		);
		return $post;
	}

}

/* End of file deskripsi_model.php */
/* Location: ./application/models/deskripsi_model.php */