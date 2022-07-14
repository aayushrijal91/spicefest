<footer>
	<div class="footer-top">
		<div class="container">
			<div class="row justify-content-center justify-content-lg-between align-items-center py-3 py-lg-4">
				<div class="col-auto">
					<a href="./"><?= renderImg("footer-logo.png", "logo") ?></a>
				</div>
				<div class="col-auto">
					<div class="ps-md-7 pb-4 text-white h10">Immerse In Food, Dance, Music</div>
					<div class="row">
						<div class="col-auto">
							<div class="h19 text-primary">Date <span class="ps-2 text-white font-gothic fw-800">7 August 2022</span></div>
							<div class="h19 text-primary">Time <span class="ps-2 text-white font-gothic fw-800">10am - 9pm</span></div>
						</div>
						<div class="col d-flex">
							<div class="h19 text-primary pe-3">Where</div>
							<div class="font-gothic text-white fw-800">
								<div class="pb-2">Prince Alfed Square (353D Church St, Parramatta NSW 2150) (Free)</div>
								<div>Riverside Theatre (Corner Market &, Church St, Parramatta NSW 2150) (Ticketed)</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-auto">
					<?= renderImg("disclaimer.png", "lib") ?>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row justify-content-center justify-content-lg-between align-items-center">
				<div class="col-auto">
					<div class="row">
						<div class="col">
							<a class="" href="" target="_blank">
								<svg width="16" height="30" viewBox="0 0 16 30" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M14.1825 16.7138L15.0095 11.4764H10.2129V8.09737C10.2129 6.91472 10.8745 5.56312 13.0247 5.56312H15.1749V1.17042C15.1749 1.17042 13.1901 0.83252 11.2053 0.83252C7.23577 0.83252 4.58941 3.36677 4.58941 7.75947V11.6453H0.289062V16.8828H4.75481V29.2161C5.58179 29.3851 6.57418 29.3851 7.56657 29.3851C8.55896 29.3851 9.38595 29.3851 10.3783 29.2161V16.7138H14.1825Z" fill="white" />
								</svg>
							</a>
						</div>
						<div class="col">
							<a class="" href="" target="_blank">
								<svg width="29" height="30" viewBox="0 0 29 30" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M21.6368 5.90576C20.6442 5.90576 19.9824 6.58158 19.9824 7.59531C19.9824 8.60905 20.6442 9.28487 21.6368 9.28487C22.6294 9.28487 23.2911 8.60905 23.2911 7.59531C23.2911 6.58158 22.464 5.90576 21.6368 5.90576Z" fill="white" />
									<path d="M14.3585 8.09961C10.5535 8.09961 7.41016 11.3106 7.41016 15.1975C7.41016 19.0845 10.5535 22.2954 14.3585 22.2954C18.1635 22.2954 21.3068 19.0845 21.3068 15.1975C21.1414 11.1416 18.1635 8.09961 14.3585 8.09961ZM14.3585 19.5914C11.8769 19.5914 9.8917 17.5635 9.8917 15.0285C9.8917 12.4935 11.8769 10.6346 14.3585 10.6346C16.84 10.6346 18.8253 12.6625 18.8253 15.1975C18.8253 17.7325 16.6746 19.5914 14.3585 19.5914Z" fill="white" />
									<path d="M19.8197 29.3936H8.57005C3.93784 29.3936 0.132812 25.5069 0.132812 20.7752V9.45291C0.132812 4.72122 3.93784 0.834473 8.57005 0.834473H19.8197C24.4519 0.834473 28.2569 4.72122 28.2569 9.45291V20.7752C28.2569 25.6758 24.4519 29.3936 19.8197 29.3936ZM8.57005 3.36931C5.42676 3.36931 2.77979 6.07313 2.77979 9.28392V20.7752C2.77979 23.986 5.42676 26.6898 8.57005 26.6898H19.8197C22.963 26.6898 25.61 23.986 25.61 20.7752V9.45291C25.61 6.24212 22.963 3.5383 19.8197 3.5383H8.57005V3.36931Z" fill="white" />
								</svg>
							</a>
						</div>
					</div>
				</div>
				<div class="col-auto">
					<div class="row justify-content-center justify-content-lg-end align-items-center">
						<div class="col-auto">Copyright <?= date('Y') ?></div>
						<div class="col-auto px-2 px-md-4 px-xxl-5">/</div>
						<div class="col-auto"><?= $site ?></div>
						<div class="col-auto px-2 px-md-4 px-xxl-5">/</div>
						<div class="col-auto">All Rights Reserved</div>
					</div>
				</div>
				<div class="col-auto">
					<a href="https://www.aiims.com.au/like-our-work/" target="_blank">
						<?= renderImg("aiims.png", "logo") ?>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>
<a href="javascript:" id="return-to-top">
	<div class="d-flex justify-content-center align-items-center h-100 w-100">
		<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#ffffff" class="bi bi-arrow-up" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
		</svg>
	</div>
</a>
<script type="text/javascript" src="./assets/js/app.js?v=0.3"></script>
</body>

</html>