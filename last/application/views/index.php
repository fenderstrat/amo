<?php
	$this->load->view('header');
?>

<!-- conten wrapper -->
<div class="content-wrapper">

	<!-- main wrapper -->
	<div class="main">
<?php
	$this->load->view('menu-kiri');
	$this->load->view($content);
?>
	</div>
<?php
	$this->load->view('sidebar');
?>
</div>
<?php
	$this->load->view('footer');
?>