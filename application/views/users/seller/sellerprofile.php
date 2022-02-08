<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoCreate Seller | Dashboard</title>

    <!-- ===== ICON ===== -->
    <link rel="icon" type="image/png" href="img\logo.svg">

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
    <link rel="stylesheet" href="css\nav-styles.css">
    <link rel="stylesheet" href="css\seller-dashboard-styles.css">
</head>

<body>
    <div class="big-wrapper light">
        <header>
            <div class="nav-container">            
                <div class="logo">
                    <a href="seller-dashboard.html"><img src="img\seller-logo.svg" class="header-logo"></a>
                </div>

                <div class="links">
                    <ul>
                        <li><a href="seller-dashboard.html">Dashboard</a></li>
                        <li><a href="seller-all-orders.html">Orders</a></li>
                        <li><a href="#">Messages</a></li>
                        <li><a href="seller-services.html">Services</a></li>
                        <li><a href="seller-portfolio.html">Portfolio</a></li>
                        <li><a href="<?php echo base_url()."users/editprofile"?>">Settings</a></li>
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

    <section class="seller-profile">
        <div class="profile-section">
            <div class="profile container">
                <div class="profile-card">
                    <div class="profile-icon-container">
                        <div class="profile-icon">
                            <img src="img\nav-icon-user-icon.svg" alt="profile">
                        </div>
                    </div>

                    <div class="profile-details">
                        <div class="name-container">
                            <div class="name-with-button">
                                <h3 class="full-name">Sean David Abalora</h3>
                                <h4 class="username">@abasushi</h4>
                            </div>

                            <div class="profile-actions">
                                <button>
                                    <a href="seller-settings.html" class="edit-profile-btn">EDIT PROFILE</a>
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
                            <p>seanabalora@gmail.com</p>
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
                        <a href="new-portfolio.html" class="portfolio-btn">Add New Work</a>
                    </button>
                </div>

                <div class="portfolio-card">
                    <div class="card-container">
                        <div class="card">
                            <div class="card-image one">
                                <img src="" alt="">
                            </div>
                            <div class="card-text">
                                <h2 class="card-title">Portfolio Title</h2>
                                <p class="card-subtitle">Category or Subcategory</p>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-image one">
                                <img src="" alt="">
                            </div>
                            <div class="card-text">
                                <h2 class="card-title">Portfolio Title</h2>
                                <p class="card-subtitle">Category or Subcategory</p>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-image one">
                                <img src="" alt="">
                            </div>
                            <div class="card-text">
                                <h2 class="card-title">Portfolio Title</h2>
                                <p class="card-subtitle">Category or Subcategory</p>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-image one">
                                <img src="" alt="">
                            </div>
                            <div class="card-text">
                                <h2 class="card-title">Portfolio Title</h2>
                                <p class="card-subtitle">Category or Subcategory</p>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-image one">
                                <img src="" alt="">
                            </div>
                            <div class="card-text">
                                <h2 class="card-title">Portfolio Title</h2>
                                <p class="card-subtitle">Category or Subcategory</p>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-image one">
                                <img src="" alt="">
                            </div>
                            <div class="card-text">
                                <h2 class="card-title">Portfolio Title</h2>
                                <p class="card-subtitle">Category or Subcategory</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="services-section">
                <div class="services-header">
                    <h3>Services</h3>
                    <button>
                        <a href="new-service.html" class="portfolio-btn">Add New Service</a>
                    </button>
                </div>

                <div class="services-card">
                    <div class="services-card-image one">
                        <img src="" alt="">
                    </div>
                    <div class="services-card-text-container">
                        <div class="services-card-text">
                            <h2 class="services-card-title">Service Title</h2>
                            <h3 class="services-card-subtitle">Category or Subcategory</h3>
                            <p class="services-card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem atque quos recusandae soluta consequuntur quis. Animi pariatur quae dolorem ea error nemo provident ullam fuga.</p>
                            <a href="#" class="inquire-btn" target="_newtab">INQUIRE</a>
                            <a href="#" class="order-btn" target="_newtab">ORDER</a>
                        </div>
                    </div>
                </div>

                <div class="services-card">
                    <div class="services-card-image one">
                        <img src="" alt="">
                    </div>
                    <div class="services-card-text-container">
                        <div class="services-card-text">
                            <h2 class="services-card-title">Service Title</h2>
                            <h3 class="services-card-subtitle">Category or Subcategory</h3>
                            <p class="services-card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem atque quos recusandae soluta consequuntur quis. Animi pariatur quae dolorem ea error nemo provident ullam fuga.</p>
                            <a href="#" class="inquire-btn" target="_newtab">INQUIRE</a>
                            <a href="#" class="order-btn" target="_newtab">ORDER</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== JS ===== -->
    <script src="js\nav-script.js"></script>
</body>

</html>