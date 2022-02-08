<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoCreate Seller | Dashboard</title>

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

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/nav-styles.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/seller-dashboard-styles.css">
</head>

<body>
    <div class="big-wrapper light">
        <header>
            <div class="nav-container">            
                <div class="logo">
                    <a href="<?php echo base_url()."users/userSort";?>"><img src="<?php echo base_url('assets/img/seller-logo.svg')?>" class="header-logo"></a>
                </div>

                <div class="links">
                    <ul>
                        <li><a href="<?php echo base_url()."users/sellerhomepage";?>">Dashboard</a></li>
                        <li><a href="seller-all-orders.html">Orders</a></li>
                        <li><a href="<?php echo base_url()."messaging/inbox"?>">Messages</a></li>
                        <li><a href="<?php echo base_url()."users/editprofile";?>">Settings</a></li>
                        <li><a href="<?php echo base_url()."users/logout";?>">Log Out</a></li>
                    </ul>
                </div>

                <div class="overlay"></div>

                <div class="hamburger-menu">
                    <div class="bar"></div>
                </div>
            </div>
        </header>
    </div>

    <section class="seller-profile">
        <div class="profile-section">
            <div class="profile container">
                <div class="profile-card">
                    <div class="profile-icon-container">
                        <div class="profile-icon">
                            <img src="<?php echo $user['profilepic']?>" alt="profile">
                        </div>
                    </div>
                    
                    <div class="profile-details">
                        <div class="name-container">
                            <div class="name-with-button">
                                <h3 class="full-name"><?=$user['usersName']?></h3>
                                <h4 class="username"><?=$user['usersUid']?></h4>
                            </div>

                            <div class="profile-actions">
                                <button>
                                    <a href="<?php echo base_url()."users/editprofile";?>" class="edit-profile-btn">EDIT PROFILE</a>
                                </button>    
                            </div>
                        </div>
                    </div>
                </div>

                <div class="profile-card">
                    <div class="profile-details">
                        <div class="extra-profile-details">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Manila City</p>
                        </div>

                        <div class="extra-profile-details">
                            <i class="fas fa-envelope"></i>
                            <p><?=$user['usersEmail']?></p>
                        </div>

                        <div class="extra-profile-details">
                            <i class="fas fa-phone"></i>
                            <p>0912 345 6789</p>
                        </div>
                    </div>
                </div>

                <div class="profile-card">
                    <div class="profile-details">
                        <div class="description">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam ipsa
                                reprehenderit, rem vitae porro adipisci perspiciatis qui perferendis asperiores ea
                                sapiente quasi mollitia delectus magnam laborum placeat aspernatur quaerat magni a est quos sint
                                eum? Ea voluptatem repudiandae similique, ratione vel cum illo voluptate beatae officiis
                                alias non, quam possimus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="portfolio-services-section">
            <div class="portfolio-section">
                <div class="portfolio-header">
                    <h3>Portfolio</h3>
                    <button>
                        <a href="<?php echo base_url()."project/portfolio";?>" class="portfolio-btn">Add New Work</a>
                    </button>
                </div>

                <div class="portfolio-card">
                    <div class="card-container">
                        <?php foreach ($portfolio as $port) { ?>

                        
                        <div class="card">
                            <div class="card-image one">
                                <img src="<?=$port['projectImage']?>" alt="">
                            </div>
                            <div class="card-text">
                                <h2 class="card-title">"<?=$port['projectTitle']?>"</h2>
                                <p class="card-subtitle">"<?=$port['projectCategory']?>"</p>
                            </div>
                        </div>

                   <?php } ?>                       

                    </div>
                </div>
            </div>

            <div class="services-section">
                <div class="services-header">
                    <h3>Services</h3>
                    <button>
                        <a href="<?php echo base_url()."project/addProject";?>" class="portfolio-btn">Add New Service</a>
                    </button>
                </div>
                <?php if(empty($project)!=0){?>
                    <p><?php echo "No Records Found" ?></p> 
                <?php } else {?>
                    <?php for($i=0; $i<2; $i++) { ?>     
                    <?php if(isset($project[$i]['serviceTitle'])) { ?>
                        <div class="services-card">
                <div class="services-card-image one">
            <img src="<?=$project[$i]['serviceImage']?>" alt="">
            </div>
        <div class="services-card-text-container">
        <div class="services-card-text">
            <h2 class="services-card-title"><?=$project[$i]['serviceTitle']?></h2>
            <h3 class="services-card-subtitle"><?=$project[$i]['serviceCategory']?></h3>
            <p class="services-card-description"><?=$project[$i]['serviceDescrp']?></p>
            <a href="#" class="inquire-btn" target="_newtab">INQUIRE</a>
            <a href="#" class="order-btn" target="_newtab">ORDER</a>
        </div>
        </div>
        </div>
                    <?php } else{ ?>
            <div class="services-card">
                <div class="services-card-image one">
            <img src="<?=base_url().'assets/img/temp.jpg'?>" alt="">
            </div>
        <div class="services-card-text-container">
        <div class="services-card-text">
            <h2 class="services-card-title">No Other Records</h2>
            <h3 class="services-card-subtitle"></h3>
            <p class="services-card-description"></p>
            
        </div>
        </div>
        </div>
    <?php } ?>

                
            <?php } ?>    
                <?php } ?>
    </section>

    <!-- ===== JS ===== -->
    <script src="<?php echo base_url();?>assets/js/nav-script.js"></script>
</body>

</html>
