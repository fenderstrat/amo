<!DOCTYPE html>
<html lang="">
<head>
	<title>Title Page</title>
	<meta charset="UTF-8">
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<?= link_tag('assets/template/bootstrap/css/bootstrap.min.css'); ?>
	<?= link_tag('assets/template/bootstrap/css/style.css'); ?>
</head>
<body>

		<div class="container-fluid">
		<?php $this->load->view('template/master/header'); ?>
		<?php $this->load->view('template/master/slider'); ?>
		
			<div class="row">
				<div class="col-lg-3 col-md-12">
					<ul class="list-group">
						<?php foreach ($menu as $menus) : ?>
							<li class="list-group-item"><?= $menus->name ?></li>
						<?php endforeach;?>
					</ul>
				</div>
				<div class="col-lg-6  col-md-12 content">
				<h5>BERITA TERBARU</h5>
					<?php foreach ($artikel as $newArtikel): ?>
						<div class="pull-left">
							<img src="<?php echo image(base_url('assets/uploads/'.$newArtikel->image), "thumb"); ?>" class="img-responsive" style="margin-right:14px;">
						</div>
						<div class="arsip">
							<h3>
								<a href="<?php echo base_url().'artikel/show/'.$newArtikel->artikel_id.'/'.url_title($newArtikel->judul); ?>"><?php echo $newArtikel->judul; ?></a>
							</h3>
								<span class="meta-date">Diterbitkan pukul <?php echo $newArtikel->tanggal ?></span>
							<?php echo character_limiter($newArtikel->isi, 470); ?>
							<hr>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="col-lg-3 col-md-12 text-center sidebar">
					<div class="col-lg-12">
						<h5>IKLAN LAYANAN MASYRAKAT</h5> 
						<div class="img-thumbnail">
							<img src="<?php echo base_url('assets/template/image/iklan.gif')?>" class="img-responsive" alt="Iklan">
						</div>
					</div>

					<div class="col-lg-12">
						<h5>PESERTA PEMILU 2014</h5>
						<div class="img-thumbnail">
							<img src="<?php echo base_url('assets/template/image/daftarpartai.png')?>" class="img-responsive" alt="Iklan">
						</div>
					</div>

					<div class="col-lg-12">
						<h5>DPT ONLINE</h5>
						<div class="img-thumbnail">
							<img src="<?php echo base_url('assets/template/image/dpt.png')?>" class="img-responsive" alt="Iklan">
						</div>
					</div>

					<div class="col-lg-12">
						<h5>DATA CENTER ONLINE</h5>
						<div class="img-thumbnail">
							<img src="<?php echo base_url('assets/template/image/kpu-pusat.png')?>" class="img-responsive" alt="Iklan">
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- jQuery -->
	<?= script_tag('assets/js/jquery-2.0.2.min.js') ?>
	<!-- Bootstrap JavaScript -->
	<?= script_tag('assets/template/bootstrap/js/bootstrap.min.js') ?>
</body>
</html>