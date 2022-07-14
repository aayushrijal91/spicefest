<?php
include __DIR__ . '/../functions.php';
include __DIR__ . '/header.php';
?>

<section class="main">
    <div class="event-category">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-11">
                    <div class="row gx-4">
                        <div class="col-6 h-inherit">
                            <div class="category-card">
                                <?= renderImg("free-entry-circle.png", "lib", "free-entry-circle") ?>
                                <div class="title">
                                    <svg width="41" height="51" viewBox="0 0 41 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.9464 0.430657C15.4306 1.39394 13.2853 3.65775 12.6457 6.02385C12.4856 6.61711 12.3183 7.23514 12.2744 7.39791C12.2304 7.56041 11.6148 7.83932 10.9062 8.01754C8.20814 8.69578 6.06421 10.3695 4.86464 12.7338C4.25513 13.9349 3.93679 16.3466 4.18241 17.901L4.39392 19.2394L3.2154 20.3257C2.56727 20.9232 1.70468 22.0884 1.2987 22.9148C0.676672 24.1815 0.560791 24.7569 0.560791 26.5758C0.560791 28.5162 0.654828 28.918 1.49317 30.5616C3.1219 33.7546 5.93235 35.3503 9.60191 35.1649C11.1347 35.0874 11.8865 34.8897 13.175 34.2251C14.1034 33.7466 14.8754 33.4941 14.9655 33.6401C15.0526 33.781 15.5934 34.1925 16.1672 34.5548L17.2104 35.2134V42.6692V50.1247H20.4071H23.6038V42.8168C23.6038 35.8386 23.627 35.5016 24.1164 35.3463C24.3985 35.2568 25.0788 34.8785 25.6284 34.5056L26.6276 33.8273L27.9596 34.4504C29.0526 34.9619 29.725 35.0727 31.7088 35.0685C33.7997 35.0639 34.3078 34.9683 35.469 34.3596C36.8782 33.6211 38.7342 31.8041 39.4057 30.5054C40.1407 29.0839 40.4748 26.6211 40.1426 25.0726C39.7528 23.255 38.6598 21.2642 37.4856 20.233L36.5537 19.4149L36.5388 16.7217C36.5255 14.3372 36.4429 13.8758 35.8179 12.6965C35.4295 11.9639 34.6503 10.8991 34.0864 10.3304C33.0709 9.30635 30.7988 8.04231 29.9648 8.03725C29.6656 8.03539 29.4788 7.69893 29.3582 6.94451C28.9823 4.59279 27.2252 2.24746 24.8836 0.971435C23.6936 0.3233 23.1131 0.189837 21.2063 0.125637C19.7137 0.0752882 18.6025 0.179182 17.9464 0.430657Z" fill="#452B1C" />
                                    </svg>
                                    <div class="ps-3">Outdoor Event</div>
                                </div>
                                <div class="window win1">
                                    <a class="btn h16 px-md-5 py-3 button" href="#form">Save the Date</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 h-inherit">
                            <div class="category-card">
                                <?= renderImg("held-at-circle.png", "lib", "held-at-circle") ?>
                                <div class="title">
                                    <svg width="44" height="47" viewBox="0 0 44 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.2458 7.10527C11.5435 10.9366 6.92955 15.6777 4.9926 17.6412C1.03855 21.649 0.82373 21.9313 0.82373 23.1197C0.82373 23.9845 1.1374 24.7238 1.71068 25.2099L2.13435 25.5692L4.63961 25.6291L7.14487 25.689L7.19464 35.031C7.24939 45.3021 7.20928 44.6736 7.85772 45.4147C8.4514 46.0932 8.561 46.1097 12.4706 46.1097C16.3801 46.1097 16.4897 46.0932 17.0834 45.4147C17.7118 44.6966 17.692 44.8924 17.7465 38.8637L17.7962 33.3543H22.0269H26.2576L26.3074 38.8637C26.3618 44.8924 26.342 44.6966 26.9705 45.4147C27.5641 46.0932 27.6737 46.1097 31.5833 46.1097C35.4928 46.1097 35.6024 46.0932 36.1961 45.4147C36.8446 44.6736 36.8045 45.3021 36.8592 35.031L36.909 25.689L39.4065 25.6291L41.904 25.5692L42.2933 25.2418C42.9191 24.7155 43.1704 24.1668 43.2067 23.2468C43.2509 22.1278 43.0537 21.7841 41.3783 20.0611C40.6089 19.2699 38.0119 16.6024 35.6072 14.1335C33.2024 11.6644 29.1655 7.50098 26.6363 4.88126C24.1071 2.26153 22.0241 0.122925 22.0074 0.128674C21.9908 0.134423 18.948 3.27395 15.2458 7.10527Z" fill="#452B1C" />
                                    </svg>
                                    <div class="ps-3">Indoor Event</div>
                                </div>
                                <div class="window win2">
                                    <a class="btn h16 px-md-5 py-3 button" href="#form">Book Tickets</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="festival-overview">
        <div class="container">
            <div class="d-flex align-items-center flex-column w-100">
                <div><?= renderImg("food-dance-music.png", "lib") ?></div>
                <div class="pt-4"><?= renderImg("holi-img.png", "lib") ?></div>
            </div>
        </div>
    </div>

    <div class="about-spicefest">
        <div class="container-fluid pe-xl-0">
            <div class="row justify-content-end">
                <div class="col-12 col-lg-11">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-12 col-xl-4">
                            <div class="h1 text-white line-height-1 pb-3">
                                About SpiceFest
                            </div>
                            <div class="text-white py-4 pe-xxl-4 font-poppins fw-700 h14">
                                Welcome to a unique day and night festival experience held both indoor and outdoors, where spicy food, music and dance coalesce culminating in proximity fireworks!
                            </div>
                            <div class="pt-3"><a href="#form" class="btn btn-spicy text-white h14 rounded-0 px-6 py-3">Enquire</a></div>
                        </div>
                        <div class="col-12 col-xl-7">
                            <div class="about-slider">
                                <div><?= renderImg("about-1.png", "lib", "w-100") ?></div>
                                <div><?= renderImg("about-2.png", "lib", "w-100") ?></div>
                                <div><?= renderImg("about-3.png", "lib", "w-100") ?></div>
                                <div><?= renderImg("about-4.png", "lib", "w-100") ?></div>
                                <div><?= renderImg("about-5.png", "lib", "w-100") ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="event-inclusions">
        <div class="container position-relative">
            <div class="float-title">Outdoor event includes</div>
            <div class="row justify-content-center">
                <div class="col-12 col-xl-11">
                    <div class="row g-5">
                        <div class="col-4">
                            <div class="inclusion-card free-entry">
                                <div class="caption">Free Entry</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="inclusion-card food-truck">
                                <div class="caption">Food Stands/Trucks</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="inclusion-card desserts">
                                <div class="caption">Desserts</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="inclusion-card entertainment">
                                <div class="caption">Entertainment</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="inclusion-card drums">
                                <div class="caption">Drums</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="inclusion-card dancing">
                                <div class="caption">Dancing</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="indoor-event-inclusion">
        <div class="container position-relative">
            <div class="float-title">Indoor event includes</div>
            <div class="row justify-content-center">
                <div class="col-12 col-xl-11">
                    <div><?= renderImg("indoor-event-inclusion.jpg", "lib", "w-100") ?></div>
                    <div class="content">
                        <div class="row align-items-center">
                            <div class="col-auto"><?= renderImg("riverside-theatre.png", "logo") ?></div>
                            <div class="col ps-6">
                                <div class="text-white h6">Theatrical Performances <span class="h13">(Ticketed Event)</span></div>
                                <div class="row align-items-center pt-4">
                                    <div class="col text-white font-gothic h14 fw-600">
                                        Watch two class acts featuring several artists at Parramatta Riverside Theatre! Buy tickets now to avoid disappointment.
                                    </div>
                                    <div class="col-md-4">
                                        <a href="#form" class="btn d-block btn-quartinary text-dark font-poppins h15 rounded-0 fw-700 p-3">Book Tickets</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="look-forward-to">Look Forward To</div>
        </div>
    </div>

    <div class="bottom-section">
        <div class="variety">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-11">
                        <div class="h4 text-dark pb-5">
                            <svg width="52" height="53" viewBox="0 0 52 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M44.6551 0.868953C40.453 1.46231 37.6683 3.62968 36.0803 7.54228C35.0994 9.95916 35.0316 10.5889 34.9526 18.0065L34.8794 24.8834L35.2915 25.3991C35.7679 25.9951 36.8917 26.4307 37.9531 26.4307C38.6855 26.4307 39.5885 26.7736 40.163 27.27C40.5352 27.5915 40.538 27.6585 40.627 38.4449L40.7165 49.2963L41.1277 49.8694C41.6686 50.6232 42.9669 51.4557 44.1015 51.776C45.3778 52.1363 47.342 52.1339 48.6298 51.7706C49.8051 51.4389 51.1937 50.5119 51.6501 49.7544C51.9865 49.1958 51.9951 48.6202 51.9951 26.4307C51.9951 4.24115 51.9865 3.66555 51.6501 3.10692C51.1954 2.35218 49.8027 1.42014 48.6588 1.10506C47.6448 0.825743 45.7514 0.714109 44.6551 0.868953ZM2.12992 2.84869C1.54648 3.03701 1.22066 3.2456 0.921327 3.62234L0.511719 4.13811L0.563278 10.27L0.615017 16.4019L1.09677 17.2725C2.07031 19.0316 3.58665 20.2728 6.01225 21.2958C7.37248 21.8696 8.01804 22.2979 8.63496 23.0362C8.99372 23.4656 9.03436 23.7025 9.08807 25.6702C9.12065 26.8594 9.09684 27.9605 9.03561 28.1171C8.97421 28.2736 8.36911 28.777 7.69096 29.2358C6.84203 29.81 6.42365 30.1903 6.34774 30.4565C6.28723 30.6692 6.26163 34.9953 6.29081 40.0698L6.3438 49.2963L6.75502 49.8694C7.29585 50.6232 8.59414 51.4557 9.7288 51.776C10.9961 52.1338 12.97 52.1338 14.2374 51.776C15.372 51.4557 16.6703 50.6232 17.2111 49.8694L17.6224 49.2963L17.677 40.0698C17.7145 33.7055 17.6716 30.7119 17.5382 30.4195C17.4252 30.1715 16.8658 29.6614 16.1902 29.19C15.555 28.7469 14.9868 28.2602 14.9271 28.1084C14.8677 27.9567 14.8455 26.8594 14.8781 25.6702C14.9318 23.7025 14.9724 23.4656 15.3312 23.0362C15.9481 22.2979 16.5937 21.8696 17.9539 21.2958C20.3795 20.2728 21.8958 19.0316 22.8694 17.2725L23.3511 16.4019L23.4029 10.27L23.4544 4.13811L23.0448 3.62234C22.6041 3.06749 21.4633 2.59081 20.5763 2.59081C19.6906 2.59081 18.5483 3.06749 18.1147 3.61799C17.7156 4.12458 17.7119 4.17547 17.7119 9.03869V13.9481L17.2724 14.2294C16.6911 14.6016 15.8683 14.6016 15.287 14.2294L14.8475 13.9481V9.03869C14.8475 4.17547 14.8437 4.12458 14.4447 3.61799C14.0111 3.06749 12.8687 2.59081 11.9831 2.59081C11.0974 2.59081 9.95509 3.06749 9.52149 3.61799C9.12244 4.12458 9.11868 4.17547 9.11868 9.03869V13.9481L8.67918 14.2294C8.09788 14.6016 7.27509 14.6016 6.6938 14.2294L6.25429 13.9481V9.03869C6.25429 4.17547 6.25053 4.12458 5.85148 3.61799C5.41789 3.06749 4.27553 2.59081 3.3899 2.59081C3.13622 2.59081 2.56925 2.70691 2.12992 2.84869Z" fill="#452B1C" />
                            </svg>
                            <span class="ps-3">Main Dances</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="variety-slider cuisine-slider">
                <div class="variety-slider-wrapper">
                    <div><?= renderImg("indian.jpg", "lib", "w-100") ?></div>
                    <div class="caption">Indian</div>
                </div>
                <div class="variety-slider-wrapper">
                    <div><?= renderImg("spanish.jpg", "lib", "w-100") ?></div>
                    <div class="caption">Spanish</div>
                </div>
                <div class="variety-slider-wrapper">
                    <div><?= renderImg("srilankan.jpg", "lib", "w-100") ?></div>
                    <div class="caption">Sri Lankan</div>
                </div>
                <div class="variety-slider-wrapper">
                    <div><?= renderImg("south-american.jpg", "lib", "w-100") ?></div>
                    <div class="caption">South American</div>
                </div>
                <div class="variety-slider-wrapper">
                    <div><?= renderImg("juices.jpg", "lib", "w-100") ?></div>
                    <div class="caption">Juices</div>
                </div>
                <div class="variety-slider-wrapper">
                    <div><?= renderImg("american.jpg", "lib", "w-100") ?></div>
                    <div class="caption">American</div>
                </div>
                <div class="variety-slider-wrapper">
                    <div><?= renderImg("moroccan.jpg", "lib", "w-100") ?></div>
                    <div class="caption">Moroccan</div>
                </div>
                <div class="variety-slider-wrapper">
                    <div><?= renderImg("japanese.jpg", "lib", "w-100") ?></div>
                    <div class="caption">Japanese</div>
                </div>
                <div class="variety-slider-wrapper">
                    <div><?= renderImg("french.jpg", "lib", "w-100") ?></div>
                    <div class="caption">French</div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-auto text-white bg-very-spicy h4 px-4 py-3 mt-n3 position-relative">
                        +More
                    </div>
                </div>
            </div>
        </div>

        <div class="variety">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-11">
                        <div class="h4 text-dark pb-5">
                            <svg width="55" height="42" viewBox="0 0 55 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9933 0.204136C12.4861 0.501169 11.6216 1.00823 10.4431 2.28666C9.24537 3.5864 8.74186 4.88082 8.74186 6.66048C8.74186 8.44369 9.24537 9.73354 10.4563 11.0541C11.8243 12.5453 13.2344 13.1604 15.285 13.1604C17.231 13.1604 18.5237 12.6618 19.8384 11.4041C21.2482 10.0557 21.7629 8.78689 21.7629 6.66048C21.7629 4.45645 21.2388 3.22545 19.6983 1.81106C18.1239 0.365716 16.0863 -0.208311 13.9933 0.204136ZM38.436 0.227472C37.1568 0.416954 36.3007 0.855782 35.1821 1.89476C34.5403 2.49086 34.48 2.50024 33.7362 2.11544C32.7736 1.61777 30.8534 1.5957 29.9418 2.07207C29.5651 2.26891 28.9216 2.78256 28.5119 3.21353C27.9612 3.79263 27.5394 3.99708 26.8954 3.99708C26.1334 3.99708 26.0654 4.04679 26.3538 4.3943C27.0927 5.28489 29.0659 5.87439 30.4085 5.60577C30.8326 5.52105 31.7339 4.95311 32.4116 4.34382C33.0892 3.73454 33.699 3.2361 33.7667 3.2361C33.8344 3.2361 33.737 3.66428 33.5503 4.18732C33.1018 5.44368 33.0988 8.11064 33.5445 9.17727C34.0635 10.4194 35.5935 12.005 36.8687 12.6224C38.3272 13.3284 40.8501 13.354 42.3776 12.6782C43.7032 12.0918 44.9449 10.8897 45.6756 9.4847C46.3785 8.13372 46.4369 5.28971 45.787 4.06049C45.1967 2.94389 45.6475 3.01897 46.9957 4.26189C47.6078 4.82603 48.489 5.39676 48.9539 5.53018C50.3105 5.91904 52.4136 5.35845 53.2136 4.3943C53.5012 4.04781 53.4388 3.99708 52.725 3.99708C52.1127 3.99708 51.5879 3.71019 50.6374 2.85562C49.4336 1.77326 49.2898 1.71416 47.8607 1.71416C47.0035 1.71416 46.0298 1.88157 45.6026 2.10251C44.8865 2.47285 44.8196 2.46042 44.1567 1.83236C42.6992 0.451198 40.7047 -0.10837 38.436 0.227472ZM1.81854 7.9242C0.844493 8.34045 0.466797 8.98373 0.466797 10.2261C0.466797 11.0931 0.755459 11.4538 4.39849 15.142L8.33018 19.1224V28.8164C8.33018 39.2171 8.38877 39.7493 9.62814 40.6173C10.8366 41.4638 13.0218 40.9288 13.6075 39.643C13.8117 39.1951 13.9106 37.2434 13.9106 33.6631V28.3482H15.0521H16.1936V33.8272V39.3062L17.056 40.1686C18.4727 41.5853 20.4783 41.2791 21.3951 39.5063C21.7121 38.893 21.774 37.1666 21.774 28.9273V19.0811L24.5828 16.2951L27.3913 13.5092L30.1559 16.4263L32.9205 19.3433L32.9278 29.3248L32.9349 39.3062L33.7974 40.1686C35.2141 41.5853 37.2197 41.2791 38.1364 39.5063C38.4365 38.9257 38.5154 37.6891 38.5154 33.5608V28.3482H39.53H40.5447V33.4295C40.5447 38.8909 40.7136 39.8267 41.8426 40.6173C42.1673 40.8449 42.8758 41.0311 43.4168 41.0311C44.1971 41.0311 44.5783 40.853 45.2627 40.1686L46.1251 39.3062V29.3552V19.4042L50.0703 15.2666C53.1956 11.9888 54.0448 10.9488 54.1564 10.2611C54.3401 9.13034 53.9015 8.35313 52.8268 7.90391C51.5148 7.35575 50.7305 7.83212 47.3975 11.1999L44.4847 14.1434H39.6571H34.8298L31.689 10.9952C29.7351 9.03649 28.2988 7.79915 27.8882 7.72051C26.7591 7.5049 25.8041 8.15706 22.7927 11.1999L19.88 14.1434H15.0597H10.2397L7.06544 11.0021C5.29364 9.24905 3.61088 7.79915 3.25703 7.72077C2.90825 7.64365 2.26092 7.73522 1.81854 7.9242Z" fill="#452B1C" />
                            </svg>
                            <span class="ps-3">Children Entertainment</span>
                        </div>
                        <div class="variety-slider children-entertainment-slider">
                            <div class="variety-slider-wrapper">
                                <div><?= renderImg("amusement-rides.jpg", "lib", "w-100") ?></div>
                                <div class="caption">Amusement Rides</div>
                            </div>
                            <div class="variety-slider-wrapper">
                                <div><?= renderImg("colourful-clothing.jpg", "lib", "w-100") ?></div>
                                <div class="caption">Colourful Clothing</div>
                            </div>
                            <div class="variety-slider-wrapper">
                                <div><?= renderImg("face-painting.jpg", "lib", "w-100") ?></div>
                                <div class="caption">Face Painting</div>
                            </div>
                            <div class="variety-slider-wrapper">
                                <div><?= renderImg("amusement-rides.jpg", "lib", "w-100") ?></div>
                                <div class="caption">Theatrical<br> Performances</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="variety">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-11">
                        <div class="h4 text-dark pb-5">
                            <svg width="52" height="53" viewBox="0 0 52 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M44.6551 0.868953C40.453 1.46231 37.6683 3.62968 36.0803 7.54228C35.0994 9.95916 35.0316 10.5889 34.9526 18.0065L34.8794 24.8834L35.2915 25.3991C35.7679 25.9951 36.8917 26.4307 37.9531 26.4307C38.6855 26.4307 39.5885 26.7736 40.163 27.27C40.5352 27.5915 40.538 27.6585 40.627 38.4449L40.7165 49.2963L41.1277 49.8694C41.6686 50.6232 42.9669 51.4557 44.1015 51.776C45.3778 52.1363 47.342 52.1339 48.6298 51.7706C49.8051 51.4389 51.1937 50.5119 51.6501 49.7544C51.9865 49.1958 51.9951 48.6202 51.9951 26.4307C51.9951 4.24115 51.9865 3.66555 51.6501 3.10692C51.1954 2.35218 49.8027 1.42014 48.6588 1.10506C47.6448 0.825743 45.7514 0.714109 44.6551 0.868953ZM2.12992 2.84869C1.54648 3.03701 1.22066 3.2456 0.921327 3.62234L0.511719 4.13811L0.563278 10.27L0.615017 16.4019L1.09677 17.2725C2.07031 19.0316 3.58665 20.2728 6.01225 21.2958C7.37248 21.8696 8.01804 22.2979 8.63496 23.0362C8.99372 23.4656 9.03436 23.7025 9.08807 25.6702C9.12065 26.8594 9.09684 27.9605 9.03561 28.1171C8.97421 28.2736 8.36911 28.777 7.69096 29.2358C6.84203 29.81 6.42365 30.1903 6.34774 30.4565C6.28723 30.6692 6.26163 34.9953 6.29081 40.0698L6.3438 49.2963L6.75502 49.8694C7.29585 50.6232 8.59414 51.4557 9.7288 51.776C10.9961 52.1338 12.97 52.1338 14.2374 51.776C15.372 51.4557 16.6703 50.6232 17.2111 49.8694L17.6224 49.2963L17.677 40.0698C17.7145 33.7055 17.6716 30.7119 17.5382 30.4195C17.4252 30.1715 16.8658 29.6614 16.1902 29.19C15.555 28.7469 14.9868 28.2602 14.9271 28.1084C14.8677 27.9567 14.8455 26.8594 14.8781 25.6702C14.9318 23.7025 14.9724 23.4656 15.3312 23.0362C15.9481 22.2979 16.5937 21.8696 17.9539 21.2958C20.3795 20.2728 21.8958 19.0316 22.8694 17.2725L23.3511 16.4019L23.4029 10.27L23.4544 4.13811L23.0448 3.62234C22.6041 3.06749 21.4633 2.59081 20.5763 2.59081C19.6906 2.59081 18.5483 3.06749 18.1147 3.61799C17.7156 4.12458 17.7119 4.17547 17.7119 9.03869V13.9481L17.2724 14.2294C16.6911 14.6016 15.8683 14.6016 15.287 14.2294L14.8475 13.9481V9.03869C14.8475 4.17547 14.8437 4.12458 14.4447 3.61799C14.0111 3.06749 12.8687 2.59081 11.9831 2.59081C11.0974 2.59081 9.95509 3.06749 9.52149 3.61799C9.12244 4.12458 9.11868 4.17547 9.11868 9.03869V13.9481L8.67918 14.2294C8.09788 14.6016 7.27509 14.6016 6.6938 14.2294L6.25429 13.9481V9.03869C6.25429 4.17547 6.25053 4.12458 5.85148 3.61799C5.41789 3.06749 4.27553 2.59081 3.3899 2.59081C3.13622 2.59081 2.56925 2.70691 2.12992 2.84869Z" fill="#452B1C" />
                            </svg>
                            <span class="ps-3">Main Dances</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="variety-slider main-dances-slider">
                <div class="variety-slider-wrapper">
                    <div><?= renderImg("korean.jpg", "lib", "w-100") ?></div>
                    <div class="caption">Korean</div>
                </div>
                <div class="variety-slider-wrapper">
                    <div><?= renderImg("arabic.jpg", "lib", "w-100") ?></div>
                    <div class="caption">Arabic</div>
                </div>
                <div class="variety-slider-wrapper">
                    <div><?= renderImg("pop-hip-hop.jpg", "lib", "w-100") ?></div>
                    <div class="caption">Pop &amp; Hip Hop</div>
                </div>
                <div class="variety-slider-wrapper">
                    <div><?= renderImg("bollywood.jpg", "lib", "w-100") ?></div>
                    <div class="caption">Bollywood</div>
                </div>
                <div class="variety-slider-wrapper">
                    <div><?= renderImg("latin.jpg", "lib", "w-100") ?></div>
                    <div class="caption">Latin</div>
                </div>
                <div class="variety-slider-wrapper">
                    <div><?= renderImg("kpop.jpg", "lib", "w-100") ?></div>
                    <div class="caption">K Pop</div>
                </div>
                <div class="variety-slider-wrapper">
                    <div><?= renderImg("moroccan.jpg", "lib", "w-100") ?></div>
                    <div class="caption">Moroccan</div>
                </div>
            </div>
        </div>

        <div class="sponsors">
        </div>
    </div>
</section>


<?php include __DIR__ . '/footer.php'; ?>