<?php
$config = array(
	'login' => array(
		array(
			'field' => 'username', 'label' => 'Username', 'rules' => 'required'
		),
		array(
			'field' => 'password', 'label' => 'Password', 'rules' => 'required'
		)
	),
	'artikel' => array(
		array(
			'field' => 'jd', 'label' => 'Judul', 'rules' => 'required'
		),
		array(
			'field' => 'isi', 'label' => 'Isi', 'rules' => 'required'
		),
	),
	'halaman' => array(
		array(
			'field' => 'jd', 'label' => 'Judul', 'rules' => 'required'
		),
		array(
			'field' => 'isi', 'label' => 'Isi', 'rules' => 'required'
		),
	),
	'kategori' => array(
		array(
			'field' => 'kate', 'label' => 'Nama Kategori', 'rules' => 'required'
		)
	),
	'menu' => array(
		array(
			'field' => 'menu', 'label' => 'Nama Menu', 'rules' => 'required'
		),
		array(
			'field' => 'link', 'label' => 'Link', 'rules' => 'required'
		),
	) ,
	'user' => array(
		array(
			'field' => 'username', 'label' => 'Username', 'rules' => 'trim|required'
		),
		array(
			'field' => 'nama', 'label' => 'Nama Lengkap', 'rules' => 'required'
		),
		array(
			'field' => 'email', 'label' => 'Email', 'rules' => 'trim|required|valid_email|valid_emails'
		),
		array(
			'field' => 'password', 'label' => 'Password', 'rules' => 'trim|required'
		),
		array(
			'field' => 'conf', 'label' => 'Konfirmasi Password', 'rules' => 'trim|required|matches[password]'
		),
	),
	'user_edit' => array(
		array(
			'field' => 'username', 'label' => 'Username', 'rules' => 'trim|required'
		),
		array(
			'field' => 'nama', 'label' => 'Nama Lengkap', 'rules' => 'required'
		),
		array(
			'field' => 'email', 'label' => 'Email', 'rules' => 'trim|required|valid_email|valid_emails'
		)
	)                                             
);