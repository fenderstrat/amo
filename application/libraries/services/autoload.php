<?php

class Autoload
{
	protected $instance;

	// public function __construct() {
	// 	$this->instance =& get_instance();
	// }

	public function menu()
	{
		$this->instance =& get_instance();
		$this->instance->load->model('menu_model');
		$data['menu'] = $this->instance->menu_model->all()->result();
		return $data;
	}

	public function all()
	{
		$data = $this->menu();
		return $data;
	}
}