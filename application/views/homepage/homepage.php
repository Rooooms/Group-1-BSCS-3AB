<!DOCTYPE html>
<html lang="en">


<!DOCTYPE html>
<html lang="en">

<?php
    $this->load->view('templates/header.php');
?>
   
    <button type="button"><a href="<?php echo base_url()."users/profile"?>">Profile</a></button>
    <button type="button"><a href="<?php echo base_url()."users/settings"?>">Settings</a></button>
    <button type="button"><a href="<?php echo base_url()."users/logout"?>">Log Out</a></button>
    <button type="button"><a href="<?php echo base_url()."messaging/index"?>">Messaging</a></button>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoCreate | Home</title>

    <!-- ===== ICON ===== -->
    <link rel="icon" type="image/png" href="<?php echo base_url('')?> img/logo.svg">

    <!-- ===== WEB ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- ===== GOOGLE FONTS ===== -->
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Goblin+One&family=Noto+Serif+Display:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Quicksand:wght@300;400;500;600;700&family=Ranchers&family=Slackey&family=Syne:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="<?php echo base_url('css/nav-styles.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/buyer-home-styles.css'); ?>">
    <!-- <link rel="stylesheet" href="css\categories-styles.css"> -->
    <link rel="stylesheet" href="<?php echo base_url('css/lightslider.css'); ?>">

    <!-- ===== JS ===== -->
    <script type="text/javascript" src="<?php echo site_url(''); ?>js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo site_url(''); ?>js/lightslider.js"></script>
</head>

<body>
    <div class="big-wrapper light">
        <header>
            <div class="nav-container">            
                <div class="logo">
                    <a href="buyer-home.html"><img src="img\buyer-logo.svg" class="header-logo"></a>
                </div>

                <div class="links">
                    <ul>
                        <li><a href="buyer-home.html">Home</a></li>
                        <li><a href="#">Categories</a></li>
                        <li><a href="<?php echo base_url()."messaging/index"?>">Messages</a></li>
                        <li><a href="<?php echo base_url()."users/profile"?>">Profile</a></li>
                        <li><a href="<?php echo base_url()."users/settings"?>">Settings</a></li>
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

    <section class="banner-section">
        <div class="banner-container">
            <div class="banner"></div>
        </div>
    </section>

    <section id="gallery">
        <!-- <h2>POPULAR JOBS</h2> -->
        <ul id="autoWidth" class="cs-hidden">
            <li class="item-a">
                <div class="card">
                    <div class="slide-img">
                        <div class="overlayer">
                            <a href="#" class="view-btn">View More</a>
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <a href="#">Service Title</a>
                            <span>Username</span>
                        </div>
                        <a href="#" class="price">Php 1500.00</a>
                    </div>
                </div>
            </li>

            <li class="item-a">
                <div class="card">
                    <div class="slide-img">
                        <div class="overlayer">
                            <a href="#" class="view-btn">View More</a>
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <a href="#">PowerPoint Presentations</a>
                            <span>rosmellecaves</span>
                        </div>
                        <a href="#" class="price">Php 1500.00</a>
                    </div>
                </div>
            </li>

            <li class="item-a">
                <div class="card">
                    <div class="slide-img">
                        <div class="overlayer">
                            <a href="#" class="view-btn">View More</a>
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <a href="#">PowerPoint Presentations</a>
                            <span>rosmellecaves</span>
                        </div>
                        <a href="#" class="price">Php 1500.00</a>
                    </div>
                </div>
            </li>

            <li class="item-a">
                <div class="card">
                    <div class="slide-img">
                        <div class="overlayer">
                            <a href="#" class="view-btn">View More</a>
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <a href="#">PowerPoint Presentations</a>
                            <span>rosmellecaves</span>
                        </div>
                        <a href="#" class="price">Php 1500.00</a>
                    </div>
                </div>
            </li>

            <li class="item-a">
                <div class="card">
                    <div class="slide-img">
                        <div class="overlayer">
                            <a href="#" class="view-btn">View More</a>
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <a href="#">PowerPoint Presentations</a>
                            <span>rosmellecaves</span>
                        </div>
                        <a href="#" class="price">Php 1500.00</a>
                    </div>
                </div>
            </li>

            <li class="item-a">
                <div class="card">
                    <div class="slide-img">
                        <div class="overlayer">
                            <a href="#" class="view-btn">View More</a>
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <a href="#">PowerPoint Presentations</a>
                            <span>rosmellecaves</span>
                        </div>
                        <a href="#" class="price">Php 1500.00</a>
                    </div>
                </div>
            </li>

            <li class="item-a">
                <div class="card">
                    <div class="slide-img">
                        <div class="overlayer">
                            <a href="#" class="view-btn">View More</a>
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <a href="#">PowerPoint Presentations</a>
                            <span>rosmellecaves</span>
                        </div>
                        <a href="#" class="price">Php 1500.00</a>
                    </div>
                </div>
            </li>

        </ul>
    </section>


    <!-- ===== JS ===== -->
    <script src="<?php echo base_url(''); ?>js\nav-script.js"></script>
    <script type="text/javascript" src="<?php echo base_url(''); ?>js\slider-script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>