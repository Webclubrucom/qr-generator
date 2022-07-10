<nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
	<div class="container">
		<a class="navbar-brand" href="index.html"><img style="height: 39px;" src="images/tmp/<?= $_CONFIG['logo_header']; ?>" alt="logo"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="ti-menu"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">

				<li class="nav-item @@contact">
					<a class="nav-link" href="#examples">Примеры QR-кодов</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<section class="section gradient-banner">
	<div class="shapes-container">
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="1000" data-aos-delay="100"></div>
		<div class="shape" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300"></div>
		<div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-right" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="zoom-out" data-aos-duration="2000" data-aos-delay="500"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="200"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-up" data-aos-duration="500" data-aos-delay="0"></div>
		<div class="shape" data-aos="fade-down" data-aos-duration="500" data-aos-delay="0"></div>
		<div class="shape" data-aos="fade-up-right" data-aos-duration="500" data-aos-delay="100"></div>
		<div class="shape" data-aos="fade-down-left" data-aos-duration="500" data-aos-delay="0"></div>
	</div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 order-2 order-md-1 text-center text-md-left">
				<h1 class="text-white font-weight-bold mb-4"><?php echo $_CONFIG['main_title']; ?></h1>
				<p class="text-white mb-5"><?php echo $_CONFIG['main_subtitle']; ?></p>
				<a href="<?php echo $_CONFIG['main_url_button']; ?>" class="btn btn-main-md"><?php echo $_CONFIG['main_name_button']; ?></a>
			</div>
			<div class="col-md-6 text-center order-1 order-md-2">
				<img class="img-fluid" src="images/<?php echo $_CONFIG['main_image']; ?>" alt="screenshot">
			</div>
		</div>
	</div>
</section>

<section class="section pt-0 position-relative pull-top">
	<div class="container">
		<div class="rounded shadow p-5 bg-white">
			<div class="row">
				<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
					<i class="ti-palette text-primary h1"></i>
					<h3 class="mt-4 h5 "><?php echo $_CONFIG['advantage_one']; ?></h3>
					<p class="regular text-muted"><?php echo $_CONFIG['main_description_one']; ?></p>
				</div>
				<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
					<i class="ti-layout-grid4 text-primary h1"></i>
					<h3 class="mt-4 h5 "><?php echo $_CONFIG['advantage_two']; ?></h3>
					<p class="regular text-muted"><?php echo $_CONFIG['main_description_two']; ?></p>
				</div>
				<div class="col-lg-4 col-md-12 mt-5 mt-lg-0 text-center">
					<i class="ti-cloud-down text-primary h1"></i>
					<h3 class="mt-4 h5 "><?php echo $_CONFIG['advantage_three']; ?></h3>
					<p class="regular text-muted"><?php echo $_CONFIG['main_description_three']; ?></p>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="feature section pt-0">
	<div class="container">
		<div class="row" style="align-items: center;">
			<div class="col-lg-6 ml-auto justify-content-center">
				<!-- Feature Mockup -->
				<div class="image-content" data-aos="fade-right">
					<img class="img-fluid" src="images/<?php echo $_CONFIG['instructions_image']; ?>" alt="iphone">
				</div>
			</div>
			<div class="col-lg-6 mr-auto align-self-center">
				<div class="feature-content">
					<!-- Feature Title -->
					<h2><?php echo $_CONFIG['instructions_title']; ?></h2>
					<!-- Feature Description -->
					<p class="desc"><?php echo $_CONFIG['instructions_subtitle']; ?></p>
				</div>

			</div>
		</div>
	</div>
</section>