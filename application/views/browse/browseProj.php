
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoCreate | Browse Service</title>

    <!-- ===== ICON ===== -->
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/logo.svg');?>">

    <!-- ===== BOX ICONS ===== -->
    <script src="https://kit.fontawesome.com/871663cc04.js" crossorigin="anonymous"></script>

    <!-- ===== GOOGLE FONTS ===== -->
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Goblin+One&family=Noto+Serif+Display:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Quicksand:wght@300;400;500;600;700&family=Ranchers&family=Slackey&family=Syne:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/nav-styles.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/browse-service-styles.css')?>">
</head>

<body>
    <div class="big-wrapper light">
        <header>
            <div class="nav-container">
                <div class="logo">
                    <a href="<?php echo base_url()."users/userSort"?>"><img src="<?php echo base_url('assets/img/buyer-logo.svg')?>" class="header-logo"></a>
                </div>

                <div class="links">
                    <ul>
                        <li><a href="<?php echo base_url()."users/buyerhomepage"?>">Home</a></li>
                        <li><a href="<?php echo base_url()."messaging/inbox"?>">Messages</a></li>
                        <li><a href="<?php echo base_url()."categories/tradsarts"?>">Browse by Category</a></li>
                        <li><a href="<?php echo base_url()."users/profile"?>">Profile</a></li>
                        <li><a href="<?php echo base_url()."users/buyereditprofile"?>">Settings</a></li>
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

    <section class="service">
        <div class="service-section">
            <div class="container">
                <div class="service-image">
                    <img src="<?=$data['serviceImage']?>" alt="service">
                </div>

                <div class="service-details">
                    <div class="service-name">
                        <h2><?=$data['serviceTitle']?></h2>
                    </div>

                    <div class="service-price">
                        <h3>PHP<?=$data['servicePrice']?>.00</h3>
                    </div>

                    <div class="service-specification-container">
                        <div class="service-specification">
                            <h3>Category</h3>
                            <p><?=$data['serviceCategory']?></p>
                        </div>

                        <div class="service-specification">
                            <h3><?=$data['serviceTimeFrame']?></h3>
                            <p>3-5 Days</p>
                        </div>

                        
                    </div>

                    <div class="actions">
                        <button>
                            <a href="#">Message</a>
                        </button>

                        <button>
                            <a href="<?php echo base_url()."project/orderform/".$data['serviceId']?>">Order</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service">
        <div class="service-section">
            <div class="container">
                <div class="service-details">
                    <div class="service-description">
                        <h2>Service Desciption</h2>
                        <p><?=$data['serviceDescrp']?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="seller">
        <div class="seller-section">
            <div class="seller-container">
                <div class="seller-profile">
                    <div class="seller-icon">
                        <img src="<?=$data['sellerpic']?>" alt="profile">
                    </div>

                    <div class="seller-details">
                        <h2><?=$data['seller']?></h2>
                        <p><?=$data['selleruid']?></p>
                    </div>
                </div>

                <div class="actions">
                    <button>
                        <a href="browse-seller.html">View Shop</a>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== JS ===== -->
    <script src="<?php echo base_url();?>assets/js/nav-script.js"></script>
</body>

</html>