<section class="video-promo section bg-1">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="content-block">
					<!-- Heading -->
					<h2><?= $_CONFIG['promo_title']; ?></h2>

					<a data-fancybox href="<?= $_CONFIG['promo']; ?>">
						<i class="ti-control-play video"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="call-to-action-app section bg-blue" id="examples">


	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2><?= $_CONFIG['galleries_title']; ?></h2>
					<p><?= $_CONFIG['galleries_desc']; ?></p>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-sm-6">
				<div class="block text-center">
					<!-- Investor Image -->
					<div class="image shadow hover-zoom">
						<img class="img-fluid" src="<?= $_CONFIG['image_one']; ?>">
					</div>
					<p><?= $_CONFIG['text_image_one']; ?></p>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-sm-6">
				<div class="block text-center">
					<!-- Investor Image -->
					<div class="image shadow hover-zoom">
						<img class="img-fluid" src="<?= $_CONFIG['image_two']; ?>">
					</div>
					<p><?= $_CONFIG['text_image_two']; ?></p>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-sm-6">
				<div class="block text-center">
					<!-- Investor Image -->
					<div class="image shadow hover-zoom">
						<img class="img-fluid" src="<?= $_CONFIG['image_three']; ?>">
					</div>
					<p><?= $_CONFIG['text_image_three']; ?></p>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-sm-6">
				<div class="block text-center">
					<!-- Investor Image -->
					<div class="image shadow hover-zoom">
						<img class="img-fluid" src="<?= $_CONFIG['image_four']; ?>">
					</div>
					<p><?= $_CONFIG['text_image_four']; ?></p>
				</div>
			</div>

		</div>
	</div>

</section>

<footer>
	<div class="footer-main">
		<div class="container">
			<div class="row" style="align-items: center;">
				<div class="col-lg-5 col-md-12 m-md-auto align-self-center">
					<div class="block">
						<a href="/"><img style="height:39px;" src="images/tmp/<?= $_CONFIG['logo_footer']; ?>" alt="footer-logo"></a>
						<!-- Social Site Icons -->
						<ul class="social-icon list-inline">
							<?php if ($_CONFIG['vkontakte'] != '') { ?>
								<li class="list-inline-item">
									<a href="<?= $_CONFIG['vkontakte']; ?>" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>
								</li>
							<?php } ?>
							<?php if ($_CONFIG['odnoklassniki'] != '') { ?>
								<li class="list-inline-item">
									<a href="<?= $_CONFIG['odnoklassniki']; ?>" target="_blank"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a>
								</li>
							<?php } ?>
							<?php if ($_CONFIG['youtube'] != '') { ?>
								<li class="list-inline-item">
									<a href="<?= $_CONFIG['youtube']; ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
								</li>
							<?php } ?>
						</ul>
					</div>
				</div>

				<div class="col-lg-7 col-md-3 col-6 mt-5 mt-lg-0">
					<div class="block-2">
						<ul>
							<li><?php echo $_CONFIG['text_footer']; ?></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="text-center bg-dark py-4">
		<small class="text-secondary"><?php echo $_CONFIG['title_site'] . ' &copy; ' . date('Y'); ?></small class="text-secondary">
	</div>
</footer>

<div class="scroll-top-to">
	<i class="ti-angle-up"></i>
</div>