<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoCreate | Home</title>

    <!-- ===== ICON ===== -->
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/logo.svg');?>">

    <!-- ===== WEB ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- ===== GOOGLE FONTS ===== -->
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Outfit:wght@100;200;300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300;400;500;600;700&family=Syne:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/nav-styles.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/footer-styles.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/buyer-home-styles.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/lightslider.css')?>">
    <!-- ===== JS ===== -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/lightslider.js"></script>
</head>
<body>
    <div class="big-wrapper light">
        <header>
            <div class="nav-container">
                <div class="logo">
                    <!-- ===== IF BUYER, REDIRECT TO BUYERHOMEPAGE, IF SELLER, REDIRECT TO SELLERHOMEPAGE ===== -->
                    <a href="<?php echo base_url()."users/buyerhomepage"?>"><img src="<?php echo base_url('assets/img/buyer-logo.svg')?>" class="header-logo"></a>
                </div>
                <div class="links">
                    <ul>
                        <li><a href="<?php echo base_url()."users/buyerhomepage"?>">Home</a></li>
                        <li><a href="<?php echo base_url()."messaging/newMessage"?>">Messages</a></li>
                        <li><a href="#">Messages</a></li>
                        <li><a href="#">Messages</a></li>
                        <li><a href="<?php echo base_url()."categories/"?>">Browse by Category</a></li>
                        <li><a href="<?php echo base_url()."users/profile"?>">Profile</a></li>
                        <li><a href="buyer-settings.html">Settings</a></li>
                        <li><a href="<?php echo base_url()."users/logout"?>">Log Out</a></li>
                    </ul>
                </div>
                <div class="overlay"></div>

                <div class="hamburger-menu">
                    <div class="bar"></div>
                </div>
            </div>
        </header>
    </div>
    <section id="slider">
        <div class="slider-title">
            <h2>Discover</h2>
        </div>
        <?php $i=0; ?>
        <div class="card-container">
            <?php for($i=0; $i<8; $i++) { ?>
            <div class="card">
                <div class="slide-img">
                    <img src="<?php echo $project[$i]['serviceImage']?>" alt="">
                    <div class="overlayer">
                        <?php $info = $project[$i]['serviceId'];?>
                        <a href="<?php echo base_url()?>orderprocess/projectPreview/<?php echo $info?>" class="view-btn">View More</a>
                    </div>
                </div>
                <div class="detail-box">
                    <div class="detail-box-container">
                        <div class="seller-details">
                            <img src="img/nav-icon-user-icon.svg" alt="profile">
                            <a href="browse-seller.html"><?php echo $project[$i]['serviceTitle'];?></a>
                        </div>
                        <div class="service-details">
                            <a href="browse-service.html"><?php echo $project[$i]['serviceDescrp'];?></a>
                        </div>
                        <div class="price-details">
                            <h2>PRICE</h2>
                            <p>₱ <?php echo $project[$i]['servicePrice'];?>.00</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
    <!-- <section class="banner-section">
        <div class="banner-container">
            <div class="banner"></div>
        </div>
    </section> -->

    <section id="slider">
        <div class="slider-title">
            <h2>Top picks for you!</h2>
        </div>
        <div class="slider-container">
            <ul id="autoWidth" class="cs-hidden">
                <li class="item-a">
                    <div class="card">
                        <div class="slide-img">
                            <div class="overlayer">
                                <a href="browse-service.html" class="view-btn">View More</a>
                            </div>
                        </div>
                        <div class="detail-box">
                            <div class="detail-box-container">
                                <div class="seller-details">
                                    <img src="img/nav-icon-user-icon.svg" alt="profile">
                                    <a href="browse-seller.html">seanabalora</a>
                                </div>

                                <div class="service-details">
                                    <a href="browse-service.html">And somewhere between our worlds, there's love.</a>
                                </div>

                                <div class="price-details">
                                    <h2>PRICE</h2>
                                    <p>PHP1,000.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="item-a">
                    <div class="card">
                        <div class="slide-img">
                            <div class="overlayer">
                                <a href="browse-service.html" class="view-btn">View More</a>
                            </div>
                        </div>

                        <div class="detail-box">
                            <div class="detail-box-container">
                                <div class="seller-details">
                                    <img src="img/nav-icon-user-icon.svg" alt="profile">
                                    <a href="browse-seller.html">seanabalora</a>
                                </div>

                                <div class="service-details">
                                    <a href="browse-service.html">And somewhere between our worlds, there's love.</a>
                                </div>

                                <div class="price-details">
                                    <h2>PRICE</h2>
                                    <p>PHP1,000.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="item-a">
                    <div class="card">
                        <div class="slide-img">
                            <div class="overlayer">
                                <a href="browse-service.html" class="view-btn">View More</a>
                            </div>
                        </div>

                        <div class="detail-box">
                            <div class="detail-box-container">
                                <div class="seller-details">
                                    <img src="img/nav-icon-user-icon.svg" alt="profile">
                                    <a href="browse-seller.html">seanabalora</a>
                                </div>

                                <div class="service-details">
                                    <a href="browse-service.html">And somewhere between our worlds, there's love.</a>
                                </div>

                                <div class="price-details">
                                    <h2>PRICE</h2>
                                    <p>PHP1,000.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="item-a">
                    <div class="card">
                        <div class="slide-img">
                            <div class="overlayer">
                                <a href="browse-service.html" class="view-btn">View More</a>
                            </div>
                        </div>

                        <div class="detail-box">
                            <div class="detail-box-container">
                                <div class="seller-details">
                                    <img src="img/nav-icon-user-icon.svg" alt="profile">
                                    <a href="browse-seller.html">seanabalora</a>
                                </div>
                                <div class="service-details">
                                    <a href="browse-service.html">And somewhere between our worlds, there's love.</a>
                                </div>
                                <div class="price-details">
                                    <h2>PRICE</h2>
                                    <p>PHP1,000.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="item-a">
                    <div class="card">
                        <div class="slide-img">
                            <div class="overlayer">
                                <a href="browse-service.html" class="view-btn">View More</a>
                            </div>
                        </div>

                        <div class="detail-box">
                            <div class="detail-box-container">
                                <div class="seller-details">
                                    <img src="img/nav-icon-user-icon.svg" alt="profile">
                                    <a href="browse-seller.html">seanabalora</a>
                                </div>

                                <div class="service-details">
                                    <a href="browse-service.html">And somewhere between our worlds, there's love.</a>
                                </div>

                                <div class="price-details">
                                    <h2>PRICE</h2>
                                    <p>PHP1,000.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="item-a">
                    <div class="card">
                        <div class="slide-img">
                            <div class="overlayer">
                                <a href="browse-service.html" class="view-btn">View More</a>
                            </div>
                        </div>
                        <div class="detail-box">
                            <div class="detail-box-container">
                                <div class="seller-details">
                                    <img src="img/nav-icon-user-icon.svg" alt="profile">
                                    <a href="browse-seller.html">seanabalora</a>
                                </div>

                                <div class="service-details">
                                    <a href="browse-service.html">And somewhere between our worlds, there's love.</a>
                                </div>
                                <div class="price-details">
                                    <h2>PRICE</h2>
                                    <p>PHP1,000.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- FOOTER STARTS HERE -->
    <div class="creator-popup center roms-popup">
        <div class="creator-grid">
            <div class="creator-img">
                <img src="/img/creator-roms.gif">
                <img src="/img/creator-img.jpg">
                <img src="/img/creator-img.jpg">
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
                    <ul>
                        <li><a href="https://www.instagram.com/seanabalora/" target="_blank"
                                class="underline">Instagram</a></li>
                        <li><a href="https://abasushi.github.io/seanabalora/" target="_blank"
                                class="underline">Roms.</a></li>
                    </ul>
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
                <img src="/img/creator-dylan.gif">
                <img src="/img/creator-img.jpg">
                <img src="/img/creator-img.jpg">
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
                    <p>Nation's Backend</p>
                </div>
                <div class="creator-details">
                    <ul>
                        <li><a href="https://www.instagram.com/seanabalora/" target="_blank"
                                class="underline">Instagram</a></li>
                        <li><a href="https://abasushi.github.io/seanabalora/" target="_blank"
                                class="underline">Dylan.</a></li>
                    </ul>
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
                <img src="/img/creator-errol.gif">
                <img src="/img/creator-img.jpg">
                <img src="/img/creator-img.jpg">
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
     <p>Oh? You mean Backend King?</p>
                </div>
                <div class="creator-details">
                    <ul>
                        <li><a href="https://www.instagram.com/seanabalora/" target="_blank"
                                class="underline">Instagram</a></li>
                        <li><a href="https://abasushi.github.io/seanabalora/" target="_blank"
                                class="underline">Lagera.</a></li>
                    </ul>
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
                <img src="/img/creator-aba.gif">
                <img src="/img/creator-img.jpg">
                <img src="/img/creator-img.jpg">

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
                    <ul>
                        <li><a href="https://www.instagram.com/seanabalora/" target="_blank"
                                class="underline">Instagram</a></li>
                        <li><a href="https://abasushi.github.io/seanabalora/" target="_blank"
                                class="underline">Aristotle.</a></li>
                    </ul>
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

                <img src="/img/creator-ros.gif">

                <img src="/img/creator-img.jpg">

                <img src="/img/creator-img.jpg">

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

                    <ul>
                        <li><a href="https://www.instagram.com/seanabalora/" target="_blank"
                                class="underline">Instagram</a></li>
                        <li><a href="https://abasushi.github.io/seanabalora/" target="_blank"
                                class="underline">tigerlilith.</a></li>
                    </ul>

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

                <img src="/img/creator-saey.gif">

                <img src="/img/creator-img.jpg">

                <img src="/img/creator-img.jpg">

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

                    <p>Responsiveness expert coming through!</p>
                </div>

                <div class="creator-details">
                    <ul>
                        <li><a href="https://www.instagram.com/seanabalora/" target="_blank"
                                class="underline">Instagram</a></li>
                        <li><a href="https://abasushi.github.io/seanabalora/" target="_blank"
                                class="underline">saeymond.</a></li>
                    </ul>

                </div>

                <div class="creator-details dismiss-btn">
                    <button id="saey-dismiss-btn">Close</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-section">
        <div class="footer-container">
            <h1>Let's GoCreate!</h1>
            <span class="footer-divider"></span>

            <div class="footer">
                <div class="footer-row">
                    <div class="footer-column">
                        <h3>Categories</h3>
                        <ul>
                            <li><a href="category-digital-art.html" class="underline">Digital Art</a></li>
                            <li><a href="category-graphic-design.html" class="underline">Graphic Design</a></li>
                            <li><a href="category-photography.html" class="underline">Photography</a></li>

                            <li><a href="category-publication-material.html" class="underline">Publication Material</a>
                            </li>

                            <li><a href="category-publication-material.html" class="underline">Publication Material</a></li>

                            <li><a href="category-publication-material.html" class="underline">Publication Material</a></li>

                            <li><a href="category-traditional-art.html" class="underline">Traditional Art</a></li>
                            <li><a href="category-typography.html" class="underline">Typography</a></li>
                            <li><a href="category-website-design.html" class="underline">Website Design</a></li>
                        </ul>
                    </div>

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

                            <li><button class="underline" id="creator-roms">Rojo</button></li>
                            <li><button class="underline" id="creator-dylan">Jabla</button></li>
                            <li><button class="underline" id="creator-errol">Lagera</button></li>

                            <li><button class="underline" id="creator-roms">Rojo</button></li>
                            <li><button class="underline" id="creator-dylan">Jabla</button></li>
                            <li><button class="underline" id="creator-errol">Lagera</button></li>

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

                            <li><a href="#" class="underline">Facebook</a></li>
                            <li><a href="#" class="underline">Instagram</a></li>
                            <li><a href="#" class="underline">Twitter</a></li>

                            <li><a href="#" class="underline">Facebook</a></li>
                            <li><a href="#" class="underline">Instagram</a></li>
                            <li><a href="#" class="underline">Twitter</a></li>

                        </ul>

                        <div class="say-hi">
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
                    </div>
                </div>
            </div>

            <span class="footer-divider"></span>

            <div class="footer-rights-container">
                <div class="footer-logo">
                    <a href="#">

                        <img src="img/logo.svg">

                        <img src="<?php echo base_url('assets/img/logo.svg')?>">

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

    <!-- ===== JS ===== -->
    <script src="<?php echo base_url('assets/js/nav-script.js')?>"></script>
    <script src="<?php echo base_url('assets/js/footer-script.js')?>"></script>
    <script src="<?php echo base_url();?>assets/js/nav-script.js"></script>
    <script src="<?php echo base_url();?>assets/js/footer-script.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/slider-script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>