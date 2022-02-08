<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoCreate</title>

    <!-- ===== ICON ===== -->
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/logo.svg')?>">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- ===== GOOGLE FONTS ===== -->
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Outfit:wght@100;200;300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300;400;500;600;700&family=Syne:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/index-nav-styles.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/footer-styles.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/https://unpkg.com/aos@next/dist/aos.css')?>" />
</head>

<body>
    <div class="big-wrapper light">
        <header>
            <div class="nav-container">
                <div class="logo">
                    <a href="<?php echo base_url()."users/landing"?>"><img src=""<?php echo base_url('assets/img/logo.svg')?>" class="header-logo"></a>
                    <h3>GoCreate</h3>
                </div>

                <div class="links">
                    <ul>
                        <li class="nav-item"><a href="<?php echo base_url()."users/login"?>" class="nav-link">Sign In</a></li>
                        <li class="nav-item"><a href="<?php echo base_url()."users/signup"?>" class="nav-link">Join</a></li>
                    </ul>
                </div>

                <div class="overlay"></div>

                <div class="hamburger-menu">
                    <div class="bar"></div>
                </div>
            </div>
        </header>
    </div>

    <section class="splash-area">
        <div class="splash-container">
            <div class="left-area">
                <div class="title" id="title">
                    <h1>Hey there, creative. Welcome to GoCreate!</h1>
                </div>

                <div class="text" id="text">
                    <p>Ready to start your creative journey in offering freelance services?</p>
                </div>

                <a href="<?php echo base_url().('users/signup')?>" class="join-btn" id="join-btn">JOIN HERE</a>
            </div>

            <div class="right-area">
                <img src="<?php echo base_url('assets/img/splash-img.svg')?>" alt="Creatives" class="creatives" id="creatives">
            </div>
        </div>
    </section>

    <section class="about-section" id="about-section">
        <div class="custom-shape-divider-top-1643094797">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>

        <div class="about-container">
            <div class="animation" data-aos="fade-up">
                <div class="about-title">
                    <h3>A Place For Local Creatives</h3>
                    <span class="about-divider"></span>
                </div>

                <div class="about-grid">
                    <div class="about-img">
                        <img src="<?php echo base_url('assets/img/bandage-img.svg')?>">
                    </div>

                    <div class="about-text">
                        <p>Offering freelance services has never been easy. With GoCreate, we offer a myriad of
                            possibilities
                            for people who want to start their own businesses in arts, graphics, design and more! </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="categories-section">
        <div class="custom-shape-divider-bottom-1643095026">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="shape-fill"></path>
            </svg>
        </div>

        <div class="categories-container">
            <div id="slider" class="slider" data-aos="fade-up">
                <div class="slider-title">
                    <h3>Explore Our Marketplace!</h3>
                </div>

                <div class="divider">
                    <span class="category-divider"></span>
                </div>

                <div class="slider-container">
                    <div class="card">
                        <div class="category-img">
                            <img src="<?php echo base_url('assets/img/category-icon-01.svg')?>">
                        </div>

                        <div class="category-title">
                            <h3>Digital Art</h3>
                        </div>
                    </div>

                    <div class="card">
                        <div class="category-img">
                            <img src="<?php echo base_url('assets/img/category-icon-02.svg')?>">
                        </div>

                        <div class="category-title">
                            <h3>Graphic Design</h3>
                        </div>
                    </div>

                    <div class="card">
                        <div class="category-img">
                            <img src="<?php echo base_url('assets/img/category-icon-03.svg')?>">
                        </div>

                        <div class="category-title">
                            <h3>Photography</h3>
                        </div>
                    </div>

                    <div class="card">
                        <div class="category-img">
                            <img src="<?php echo base_url('assets/img/category-icon-04.svg')?>">
                        </div>

                        <div class="category-title">
                            <h3>Publication Material</h3>
                        </div>
                    </div>

                    <div class="card">
                        <div class="category-img">
                            <img src="<?php echo base_url('assets/img/category-icon-05.svg')?>">
                        </div>

                        <div class="category-title">
                            <h3>Traditional Art</h3>
                        </div>
                    </div>

                    <div class="card">
                        <div class="category-img">
                            <img src="<?php echo base_url('assets/img/category-icon-06.svg')?>">
                        </div>

                        <div class="category-title">
                            <h3>Typography</h3>
                        </div>
                    </div>

                    <div class="card">
                        <div class="category-img">
                            <img src="<?php echo base_url('assets/img/category-icon-07.svg')?>">
                        </div>

                        <div class="category-title">
                            <h3>Website Design</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER STARTS HERE -->

    <div class="creator-popup center roms-popup">
        <div class="creator-grid">
            <div class="creator-img">
                <img src="<?php echo base_url('assets/img/creator-roms.gif')?>">
            </div>

            <div class="creator-about">
                <div class="creator-details">
                    <h2>Romeo Rojo</h2>
                </div>

                <div class="creator-details">
                    <p>GoCreate Final Boss</p>
                </div>

                <div class="creator-details">
                    <div class="creator-links">
                        <a href="https://www.facebook.com/romeo.rojo.5" target="_blank"><i
                                class='bx bxl-facebook'></i></a>
                    </div>
                </div>

                <div class="creator-details dismiss-btn">
                    <button id="roms-dismiss-btn">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="creator-popup center dylan-popup">
        <div class="creator-grid">
            <div class="creator-img">
                <img src="<?php echo base_url('assets/img/creator-dylan.gif')?>">
            </div>

            <div class="creator-about">
                <div class="creator-details">
                    <h2>Dylan Jabla</h2>
                </div>

                <div class="creator-details">
                    <p>GoCreate Backend Boi</p>
                </div>

                <div class="creator-details">
                    <div class="creator-links">
                        <a href="https://www.facebook.com/dylan.jabla/" target="_blank"><i
                                class='bx bxl-facebook'></i></a>
                        <a href="https://www.instagram.com/dylan.jabla//" target="_blank"><i
                                class='bx bxl-instagram'></i></a>
                        <a href="https://djabla.github.io/" target="_blank"><i class='bx bxl-github'></i></a>

                    </div>
                </div>


                <div class="creator-details dismiss-btn">
                    <button id="dylan-dismiss-btn">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="creator-popup center errol-popup">
        <div class="creator-grid">
            <div class="creator-img">
                <img src="<?php echo base_url('assets//img/creator-errol.gif')?>">
            </div>

            <div class="creator-about">
                <div class="creator-details">
                    <h2>Errol John Lagera</h2>
                </div>

                <div class="creator-details">
                    <p>Your friendly programmer</p>
                </div>

                <div class="creator-details">
                    <div class="creator-links">
                        <a href="https://www.facebook.com/erroljohn.lagera" target="_blank"><i
                                class='bx bxl-facebook'></i></a>
                        <a href="https://www.instagram.com/yieeej/" target="_blank"><i class='bx bxl-instagram'></i></a>
                        <a href="https://lorrenhoj.github.io/lagera/" target="_blank"><i class='bx bxl-github'></i></a>
                    </div>
                </div>

                <div class="creator-details dismiss-btn">
                    <button id="errol-dismiss-btn">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="creator-popup center aba-popup">
        <div class="creator-grid">
            <div class="creator-img">
                <img src="<?php echo base_url('assets/img/creator-aba.gif')?>">
            </div>

            <div class="creator-about">
                <div class="creator-details">
                    <h2>Sean David Abalora</h2>
                </div>

                <div class="creator-details">
                    <p>Frontend Center!</p>
                </div>

                <div class="creator-details">
                    <div class="creator-links">
                        <a href="https://www.instagram.com/seanabalora/" target="_blank"><i
                                class='bx bxl-instagram'></i></a>
                        <a href="https://abasushi.github.io/seanabalora/" target="_blank"><i
                                class='bx bxl-github'></i></a>
                    </div>
                </div>

                <div class="creator-details dismiss-btn">
                    <button id="aba-dismiss-btn">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="creator-popup center ros-popup">
        <div class="creator-grid">
            <div class="creator-img">
                <img src="<?php echo base_url('assets/img/creator-ros.gif')?>">
            </div>

            <div class="creator-about">
                <div class="creator-details">
                    <h2>Rosario Imelda Cuevas</h2>
                </div>

                <div class="creator-details">
                    <p>GoCreate Girl Boss</p>
                </div>

                <div class="creator-details">
                    <div class="creator-links">
                        <a href="https://www.instagram.com/rosmellecaves/" target="_blank"><i
                                class='bx bxl-instagram'></i></a>
                        <a href="https://www.linkedin.com/in/rosmelle-cuevas-b825921ba/" target="_blank"><i
                                class='bx bxl-linkedin'></i></i></a>
                    </div>
                </div>

                <div class="creator-details dismiss-btn">
                    <button id="ros-dismiss-btn">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="creator-popup center saey-popup">
        <div class="creator-grid">
            <div class="creator-img">
                <img src="<?php echo base_url('assets//img/creator-saey.gif')?>">
            </div>

            <div class="creator-about">
                <div class="creator-details">
                    <h2>Saeymond Charles Serrano</h2>
                </div>

                <div class="creator-details">
                    <p>Cutie</p>
                </div>

                <div class="creator-details">
                    <div class="creator-links">
                        <a href="https://www.instagram.com/seymondcute/" target="_blank"><i
                                class='bx bxl-instagram'></i></a>
                        <a href="https://saeymondserrano.github.io/Portfolio/" target="_blank"><i
                                class='bx bxl-github'></i></a>
                    </div>
                </div>

                <div class="creator-details dismiss-btn">
                    <button id="saey-dismiss-btn">Close</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-section">
        <div class="custom-shape-divider-top-1643100995">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                    opacity=".25" class="shape-fill"></path>
                <path
                    d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                    opacity=".5" class="shape-fill"></path>
                <path
                    d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                    class="shape-fill"></path>
            </svg>
        </div>

        <div class="footer-container">
            <h1>Let's GoCreate!</h1>
            <span class="footer-divider"></span>

            <div class="footer">
                <div class="footer-row">
                    <div class="footer-column">
                        <h3>Creators</h3>
                        <ul>
                            <li>
                                <h5>Backend</h5>
                            </li>
                            <li><button class="underline" id="creator-roms">Rojo</button></li>
                            <li><button class="underline" id="creator-dylan">Jabla</button></li>
                            <li><button class="underline" id="creator-errol">Lagera</button></li>
                            <li>
                                <h5>Frontend</h5>
                            </li>
                            <li><button class="underline" id="creator-aba">Abalora</button></li>
                            <li><button class="underline" id="creator-ros">Cuevas</button></li>
                            <li><button class="underline" id="creator-saey">Serrano</button></li>
                        </ul>
                    </div>

                    <div class="footer-column">
                        <h3>Socials</h3>
                        <ul>
                            <li><a href="https://www.facebook.com/GoCreatePhilippines/?ref=page_internal"
                                    target="_blank" class="underline">Facebook</a></li>
                            <li><a href="https://www.instagram.com/thegocreate/" target="_blank"
                                    class="underline">Instagram</a></li>
                            <li><a href="https://twitter.com/thegocreate" target="_blank" class="underline">Twitter</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer-column">
                        <h3>Say Hi!</h3>

                        <div class="e-mail">
                            <h2 class="underline" id="copy-email">gocreate@gmail.com</h2>
                            <div class="popup">
                                <h4>Copied to Clipboard!</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <span class="footer-divider"></span>

            <div class="footer-rights-container">
                <div class="footer-logo">
                    <a href="#">
                        <img src="<?php echo base_url('assets/img/logo.svg')?>">
                    </a>
                    <h3>GoCreate</h3>
                </div>

                <div class="footer-rights">
                    <p>Team Roms &copy; 2022</p>
                </div>
            </div>
        </div>
    </footer>

    <!--===== LANDING PAGE ANIMATIONS =====-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

    <!-- ===== JS ===== -->
    <script src="<?php echo base_url('assets/js/landing-page.js')?>"></script>
    <script src="<?php echo base_url('assetsjs/footer-script.js')?>"></script>

    <!-- ===== ABOUT/EXPLORE SECTION ANIMATIONS ===== -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 400,
            duration: 800,
        });
    </script>
</body>

</html>