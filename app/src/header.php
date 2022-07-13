<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="./assets/images/favicon.png" type="image/png">
	<title><?= $site ?></title>
	<link rel="stylesheet" href="./assets/css/main.css?v=0.1">

	<!-- Recaptcha Here -->
	<!-- <script src="https://www.google.com/recaptcha/api.js?render=<?= $recaptcha_client_secret ?>"></script>
	<script>
		grecaptcha.ready(function() {
			grecaptcha.execute('<?= $recaptcha_client_secret ?>', {
				action: 'contact'
			}).then(function(token) {
				document.getElementById('recaptchaResponse').value = token;
			});
		});
	</script> -->
</head>

<body>
	<header>
		<div class="header-top-bar py-3">
			<div class="container">
				<div class="row justify-content-end align-items-center">
					<div class="col-auto">
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
								<?= renderImg("parramatta-council.png", "logo") ?>
							</div>
							<div class="col-auto">
								<?= renderImg("investment-nsw.png", "logo") ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="banner">
			<?= renderImg("fia-presents.png", "lib", "fia-presents") ?>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-auto">
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
			</div>
		</div>
	</header>