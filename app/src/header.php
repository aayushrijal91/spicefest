<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="./assets/images/favicon.jpg" type="image/jpg">
	<title><?= $site ?></title>
	<link rel="stylesheet" href="./assets/css/main.css?v=0.1">
</head>

<body>
	<div class="sticky-menu">
		<div class="container-fluid">
			<div class="row justify-content-between">
				<div class="col-auto">
					<div class="row gx-2">
						<div class="col-auto py-2">
							<a href="#about-spicefest" class="btn btn-extra-dark rounded-0 font-poppins py-3 px-5 h16 fw-700">About SpiceFest</a>
						</div>
						<div class="col-auto py-2">
							<a href="#outdoor-events" class="btn btn-extra-dark rounded-0 font-poppins py-3 px-5 h16 fw-700">Outdoor Event</a>
						</div>
						<div class="col-auto py-2">
							<a href="#indoor-events" class="btn btn-extra-dark rounded-0 font-poppins py-3 px-5 h16 fw-700">Indoor Event</a>
						</div>
						<div class="col-auto py-2">
							<a href="#what-to-expect" class="btn btn-extra-dark rounded-0 font-poppins py-3 px-5 h16 fw-700">What To Expect</a>
						</div>
					</div>
				</div>
				<div class="col-auto py-2">
					<a href="https://linktr.ee/spicefest" target="_blank" class="btn btn-spicy rounded-0 font-poppins py-3 px-5 h16 fw-700">Get Tickets Now</a>
				</div>
			</div>
		</div>
	</div>
	<header>
		<div class="header-top-bar">
			<div class="container">
				<div class="row justify-content-center justify-content-lg-end align-items-center">
					<div class="col-auto d-xl-none">
						<?= renderImg("mobile-logo.png", "logo") ?>
					</div>
					<div class="col-auto d-none d-md-inline-block">
						<div class="row justify-content-center justify-content-lg-end no-gutters align-items-center">
							<div class="col-auto font-poppins h20">
								This Event is <span class="fw-700">Proudly Sponsored</span> by
							</div>
							<div class="col-auto">
								<?= renderImg("australian-india.png", "logo") ?>
							</div>
							<div class="col-auto">
								<?= renderImg("nsw-gov.png", "logo") ?>
							</div>
							<div class="col-auto">
								<?= renderImg("investment-nsw.png", "logo") ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="banner mt-xl-n5">
			<?= renderImg("fia-presents.png", "lib", "fia-presents") ?>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-auto col-xl-9 col-xxl-auto">
						<div class="hero-img">
							<?= renderImg("spicefest-gif.gif", "lib", "spicefest") ?>
							<?= renderImg("buy-tickets.png", "lib", "buy-tickets") ?>
							<div class="location">Prince Alfred Square<br>&amp; Riverside Theatres</div>
							<div class="date">7 August</div>
						</div>
					</div>
				</div>
				<div class="row justify-content-center timing">
					<div class="col-auto">
						<div class="bg-primary p-3 d-flex align-items-center">
							<div class="text-gradient-red h11">Date</div>
							<div class="font-gothic h8 ps-3 fw-900 letter-spacing-n07">7 August 2022</div>
						</div>
					</div>
					<div class="col-auto">
						<div class="bg-primary p-3 d-flex align-items-center">
							<div class="text-gradient-red h11">Time</div>
							<div class="font-gothic h8 ps-3 fw-900 letter-spacing-n07">10am - 9pm</div>
						</div>
					</div>
				</div>
				<div class="row justify-content-center align-items-center mobile-sponsors">
					<div class="col-12 font-poppins pb-3 text-center">
						This Event is <span class="fw-700">Proudly Sponsored</span> by
					</div>
					<div class="col-auto">
						<?= renderImg("australian-india.png", "logo") ?>
					</div>
					<div class="col-auto">
						<?= renderImg("nsw-gov.png", "logo") ?>
					</div>
					<div class="col-auto">
						<?= renderImg("investment-nsw.png", "logo") ?>
					</div>
				</div>
			</div>
		</div>
	</header>