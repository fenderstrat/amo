<?php
	$this->load->view('administrator/header');
?>
<div class="wrapper row-offcanvas row-offcanvas-left">
<?php
	$this->load->view('administrator/sidebar');
	$this->load->view('administrator/'.$content);
	$this->load->view('administrator/footer');
?>
</div>