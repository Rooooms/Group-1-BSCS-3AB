<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoCreate | New Service</title>

    <!-- ===== ICON ===== -->
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/logo.svg')?>">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- ===== GOOGLE FONTS ===== -->
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Goblin+One&family=Noto+Serif+Display:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Quicksand:wght@300;400;500;600;700&family=Ranchers&family=Slackey&family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="<?php echo base_url('assets\css\nav-styles.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets\css\new-service-styles.css')?>">
</head>
<body>
    <div class="big-wrapper light">
        <header>
            <div class="nav-container">            
                <div class="logo">
                    <a href="<?php echo base_url().'users/sellerhomepage'?>"><img src="<?php echo base_url('assets\img\seller-logo.svg')?>" class="header-logo"></a>
                </div>

                <div class="links">
                    <ul>
                        <li><a href="<?php echo base_url().'users/sellerhomepage'?>">Dashboard</a></li>
                        <li><a href="seller-all-orders.html">Orders</a></li>
                        <li><a href="#">Messages</a></li>
                        <li><a href="seller-services.html">Services</a></li>
                        <li><a href="seller-portfolio.html">Portfolio</a></li>
                        <li><a href="seller-settings.html">Settings</a></li>
                        <li><a href="index.html">Log Out</a></li>
                    </ul>
                </div>

                <div class="overlay"></div>

                <div class="hamburger-menu">
                    <div class="bar"></div>
                </div>
            </div>
        </header>
    </div>

    <div class="wrapper">
        <section class="new-service-section">
            <div class="new-service-container">
                <div class="service-form-container">
                    <form action="post" enctype="multipart/form-data">
                        <h2>Service Details</h2>
                        <div class="service-input-field">
                            <p class="service-image">Service Image</p>
                            <input type="file" name="serviceImage">
                        </div>
        
                        <div class="service-input-field">
                            <p class="service-title">Title of Service</p>
                            <input type="text" name="serviceTitle" placeholder="Enter Title Here" maxlength="100">
                        </div>

                        <div class="service-input-field">
                            <p class="service-description">Description of Service</p>
                            <textarea type="text" name="serviceDescrp" placeholder="Enter Description Here" rows="4" wrap="hard"></textarea>
                        </div>
        
                        <div class="service-input-field">
                            <p class="service-category">Category of Service</p>
                            <select name="serviceCategory" id="service-category">
                                <option value="Graphics Arts">Traditional Art</option>
                                <option value="Digital Arts">Traditional Art</option>
                                <option value="Photography">Traditional Art</option>
                                <option value="Publication Material">Traditional Art</option>
                                <option value="Traditional Arts">Traditional Art</option>
                                <option value="Typography">Traditional Art</option>
                                <option value="Website Design">Traditional Art</option>
                            </select>
                        </div>

                        <div class="service-input-field">
                            <p class="servicePrice">Price</p>
                            <input type="number" placeholder="Enter Price Here" maxlength="100">
                        </div>

                        <div class="service-input-field">
                            <p class="serviceMOD">Mode of Delivery</p>
                            <select name="mode-of-delivery" id="service-mod">
                                <option value="Physical Delivery">Physical Delivery</option>
                                <option value="Digital Delivery">Digital Delivery</option>
                            </select>
                        </div>

                        <div class="service-input-field">
                            <p class="serviceTimeFrame">Time Frame of Service</p>
                            <input type="text" placeholder="Enter Time Frame Here" maxlength="600">
                        </div>
                        <section class="service-buttons-section">
                            <div class="service-buttons-container">
                                <a href="seller-services.html" class="discard-btn">DISCARD</a>
                                <a href="seller-services.html" class="add-btn">ADD NEW SERVICE</a>
                            </div>
                        </section>
                    </form>
                </div>
            </div>
        </section>
    
       
    </div>
    

    <!-- ===== JS ===== -->
    <script src="<?php echo base_url('assets\js\nav-script.js')?>"></script>
</body>
</html>
