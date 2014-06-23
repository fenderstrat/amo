
			<div class="news">

				<div class="judul">
					<h2 class="juduls">berita terbaru</h2>
					<div class="clear"></div>
				</div>
				<!-- looping arsip -->
				<?php foreach ($artikel as $newArtikel): ?>
					<div class="arsip">
						<div class="arsip-thumb">
							<?php if ($newArtikel->image ==''): ?>
								<a href="<?php echo base_url().'welcome/artikel/'.$newArtikel->idArtikel; ?>"><img src="<?php echo base_url().'assets/admin/' ?>default.png"></a>
							<?php else: ?>
								<a href="<?php echo base_url().'welcome/artikel/'.$newArtikel->idArtikel; ?>"><img src="<?php echo base_url().'assets/admin/' ?>images/<?php echo $newArtikel->image; ?>"></a>
							<?php endif ?>
						</div>

						<div class="arsip-summary">
							<h3><a href="<?php echo base_url().'welcome/artikel/'.$newArtikel->idArtikel; ?>"><?php echo $newArtikel->judul; ?></a>
								<span class="meta-date">Diterbitkan pada <?php echo $newArtikel->tanggal ?></span>
							</h3>

							<div class="arsip-sum-text">
								<?php echo character_limiter($newArtikel->artikel, 470); ?>
							</div>
						</div>

						<div class="clear"></div>

					</div>
				<?php endforeach ?>
				
				<!-- looping arsip -->

			</div>

			<div class="clear"></div>

			<!-- older post -->
			<div class="older-post">

				<div>
					<h2 class="juduls">berita lainnya</h2>
					<div class="clear"></div>
				</div>
				<?php foreach ($lain as $lain): ?>
					<div class="arsips">
						<?php if ($lain->image !=''): ?>
							<div class="arsip-thumbs">
								<a href="<?php echo base_url().'welcome/artikel/'.$newArtikel->idArtikel; ?>"><img src="<?php echo base_url().'assets/admin/' ?>images/<?php echo $lain->image ?>"></a>
							</div>
						<?php else: ?>
							<div class="arsip-thumbs">
								<a href="<?php echo base_url().'welcome/artikel/'.$newArtikel->idArtikel; ?>"><img src="<?php echo base_url().'assets/admin/' ?>default.png"></a>
							</div>
						<?php endif ?>
						<div class="arsip-summarys">
							<h3><a href="<?php echo base_url().'welcome/artikel/'.$newArtikel->idArtikel; ?>"><?php echo $newArtikel->judul; ?>
								<span class="meta-date">Diterbitkan pada <?php echo $newArtikel->tanggal ?></span>
							</h3>
						</div>

						<div class="clear"></div>

					</div>
				<?php endforeach ?>

				

				<div class="clear"></div>
			</div>
			<!-- older post -->