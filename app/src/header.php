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
				<div class="row justify-content-center justify-content-lg-between align-items-center">
					<div class="col-auto d-none d-md-inline-block">
						<div class="row justify-content-start no-gutters align-items-center">
							<div class="col-auto font-poppins h20">
								<span class="fw-700">Follow us</span> on Socials
							</div>
							<div class="col-auto">
								<a href="https://www.facebook.com/parramatta.spicefest/" target="_blank">
									<svg width="16" height="30" viewBox="0 0 16 30" fill="#452B1C" xmlns="http://www.w3.org/2000/svg">
										<path d="M14.1825 16.7138L15.0095 11.4764H10.2129V8.09737C10.2129 6.91472 10.8745 5.56312 13.0247 5.56312H15.1749V1.17042C15.1749 1.17042 13.1901 0.83252 11.2053 0.83252C7.23577 0.83252 4.58941 3.36677 4.58941 7.75947V11.6453H0.289062V16.8828H4.75481V29.2161C5.58179 29.3851 6.57418 29.3851 7.56657 29.3851C8.55896 29.3851 9.38595 29.3851 10.3783 29.2161V16.7138H14.1825Z" fill="#452B1C" />
									</svg>
								</a>
							</div>
							<div class="col-auto">
								<a href="https://www.instagram.com/spice.fest/" target="_blank">
									<svg width="29" height="30" viewBox="0 0 29 30" fill="#452B1C" xmlns="http://www.w3.org/2000/svg">
										<path d="M21.6368 5.90576C20.6442 5.90576 19.9824 6.58158 19.9824 7.59531C19.9824 8.60905 20.6442 9.28487 21.6368 9.28487C22.6294 9.28487 23.2911 8.60905 23.2911 7.59531C23.2911 6.58158 22.464 5.90576 21.6368 5.90576Z" fill="#452B1C" />
										<path d="M14.3585 8.09961C10.5535 8.09961 7.41016 11.3106 7.41016 15.1975C7.41016 19.0845 10.5535 22.2954 14.3585 22.2954C18.1635 22.2954 21.3068 19.0845 21.3068 15.1975C21.1414 11.1416 18.1635 8.09961 14.3585 8.09961ZM14.3585 19.5914C11.8769 19.5914 9.8917 17.5635 9.8917 15.0285C9.8917 12.4935 11.8769 10.6346 14.3585 10.6346C16.84 10.6346 18.8253 12.6625 18.8253 15.1975C18.8253 17.7325 16.6746 19.5914 14.3585 19.5914Z" fill="#452B1C" />
										<path d="M19.8197 29.3936H8.57005C3.93784 29.3936 0.132812 25.5069 0.132812 20.7752V9.45291C0.132812 4.72122 3.93784 0.834473 8.57005 0.834473H19.8197C24.4519 0.834473 28.2569 4.72122 28.2569 9.45291V20.7752C28.2569 25.6758 24.4519 29.3936 19.8197 29.3936ZM8.57005 3.36931C5.42676 3.36931 2.77979 6.07313 2.77979 9.28392V20.7752C2.77979 23.986 5.42676 26.6898 8.57005 26.6898H19.8197C22.963 26.6898 25.61 23.986 25.61 20.7752V9.45291C25.61 6.24212 22.963 3.5383 19.8197 3.5383H8.57005V3.36931Z" fill="#452B1C" />
									</svg>
								</a>
							</div>
						</div>
					</div>
					<div class="col-auto d-xl-none">
						<?= renderImg("mobile-logo.png", "logo") ?>
					</div>
					<div class="col-auto d-none d-md-inline-block pt-md-4 pt-lg-0">
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
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="banner mt-xxl-n5">
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
				</div>
				<div class="row justify-content-center align-items-center pt-5 d-md-none">
					<div class="col-auto font-poppins h20">
						<span class="fw-700">Follow us</span> on Socials
					</div>
					<div class="col-auto">
						<a href="https://www.facebook.com/parramatta.spicefest/" target="_blank">
							<svg width="16" height="30" viewBox="0 0 16 30" fill="#452B1C" xmlns="http://www.w3.org/2000/svg">
								<path d="M14.1825 16.7138L15.0095 11.4764H10.2129V8.09737C10.2129 6.91472 10.8745 5.56312 13.0247 5.56312H15.1749V1.17042C15.1749 1.17042 13.1901 0.83252 11.2053 0.83252C7.23577 0.83252 4.58941 3.36677 4.58941 7.75947V11.6453H0.289062V16.8828H4.75481V29.2161C5.58179 29.3851 6.57418 29.3851 7.56657 29.3851C8.55896 29.3851 9.38595 29.3851 10.3783 29.2161V16.7138H14.1825Z" fill="#452B1C" />
							</svg>
						</a>
					</div>
					<div class="col-auto">
						<a href="https://www.instagram.com/spice.fest/" target="_blank">
							<svg width="29" height="30" viewBox="0 0 29 30" fill="#452B1C" xmlns="http://www.w3.org/2000/svg">
								<path d="M21.6368 5.90576C20.6442 5.90576 19.9824 6.58158 19.9824 7.59531C19.9824 8.60905 20.6442 9.28487 21.6368 9.28487C22.6294 9.28487 23.2911 8.60905 23.2911 7.59531C23.2911 6.58158 22.464 5.90576 21.6368 5.90576Z" fill="#452B1C" />
								<path d="M14.3585 8.09961C10.5535 8.09961 7.41016 11.3106 7.41016 15.1975C7.41016 19.0845 10.5535 22.2954 14.3585 22.2954C18.1635 22.2954 21.3068 19.0845 21.3068 15.1975C21.1414 11.1416 18.1635 8.09961 14.3585 8.09961ZM14.3585 19.5914C11.8769 19.5914 9.8917 17.5635 9.8917 15.0285C9.8917 12.4935 11.8769 10.6346 14.3585 10.6346C16.84 10.6346 18.8253 12.6625 18.8253 15.1975C18.8253 17.7325 16.6746 19.5914 14.3585 19.5914Z" fill="#452B1C" />
								<path d="M19.8197 29.3936H8.57005C3.93784 29.3936 0.132812 25.5069 0.132812 20.7752V9.45291C0.132812 4.72122 3.93784 0.834473 8.57005 0.834473H19.8197C24.4519 0.834473 28.2569 4.72122 28.2569 9.45291V20.7752C28.2569 25.6758 24.4519 29.3936 19.8197 29.3936ZM8.57005 3.36931C5.42676 3.36931 2.77979 6.07313 2.77979 9.28392V20.7752C2.77979 23.986 5.42676 26.6898 8.57005 26.6898H19.8197C22.963 26.6898 25.61 23.986 25.61 20.7752V9.45291C25.61 6.24212 22.963 3.5383 19.8197 3.5383H8.57005V3.36931Z" fill="#452B1C" />
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>