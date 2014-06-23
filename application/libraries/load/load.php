<?php

class Load
{
	protected $instance;

	public function __construct()
	{
		$this->instance =& get_instance();
        // Load library
		$this->instance->load->library(array(
			'form_validation'
			));
        // Load helper
		$this->instance->load->model(array(
			'pengaturan_model'
			));
	}

	function setting()
	{
		return $this->instance->pengaturan_model();
	}
}