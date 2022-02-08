<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoCreate | Checkout</title>

    <!-- ===== ICON ===== -->
    <link rel="icon" type="image/png" href="img/logo.svg">

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
    <link rel="stylesheet" href="<?php echo base_url('assets/css/order-styles.css')?>">
</head>

<body>
    <div class="big-wrapper light">
        <header>
            <div class="nav-container">
                <div class="logo">
                    <!-- ===== IF BUYER, REDIRECT TO BUYERHOMEPAGE, IF SELLER, REDIRECT TO SELLERHOMEPAGE ===== -->
                    <a href="<?php echo base_url()."users/userSort"?>"><img src="<?php echo base_url('assets/img/buyer-logo.svg')?>" class="header-logo"></a>
                </div>

                <div class="links">
                    <ul>
                        <li><a href="<?php echo base_url()."users/userSort"?>">Home</a></li>
                        <li><a href="<?php echo base_url()."messaging/inbox"?>">Messages</a></li>
                        <li><a href="<?php echo base_url()."categories/"?>">Browse by Category</a></li>
                        <li><a href="<?php echo base_url()."users/profile"?>">Profile</a></li>
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

    <section class="navigation-area">
        <div class="navigation-area-container">
            <div class="navigation-icons">
                <div class="navigation-title">
                    <h2>GoCreate Checkout</h2>
                </div>

                <button>
                    <a href="#"><i class='bx bxs-message-square-dots bx-flip-horizontal bx-md'></i></a>
                </button>
            </div>
        </div>
    </section>

    <section class="order-form-area">
        <div class="form-container">
            <div class="order-form">
                <div class="service-grid">
                    <div class="service-img">
                        <img src="<?=$data['serviceImage']?>">
                    </div>

                    <div class="service-information">
                        <h2><?=$data['serviceTitle']?></h2>
                        <p><?=$data['serviceDescrp']?></p>
                    </div>
                </div>
                <form method='post'>
                    <div class="input-field">
                        <input type="text" name="buyerName" placeholder="Full Name">
                    </div>

                    <div class="input-field">
                        <input type="email" name="buyerEmail" placeholder="E-mail">
                    </div>

                    <div class="input-field">
                        <input type="text" name="buyerAddress" placeholder="Address">
                    </div>

                    <div class="select-field">
                        <select name="MOP" id="payment-method">
                            <option disabled selected>Mode of Payment</option>
                            <option value="PayPal">PayPal</option>
                            <option value="Gcash">GCash</option>
                            <option value="COD">Cash on Delivery</option>
                        </select>
                    </div>

                    <div class="select-field">
                        <select name="Mode_of_Delivery" id="delivery-method">
                            <option disabled selected>Mode of Delivery</option>
                            <option value="Digital">Digital Delivery</option>
                            <option value="Digital">Physical Delivery</option>
                        </select>
                    </div>

                    <div class="text-field">
                        <textarea name="instruction" rows="10" placeholder="Additional Instructions"></textarea>
                    </div>

                    <div class="button-area">
                    <button>
                    <input type="submit" value="Check Out">
                </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- FOOTER STARTS HERE -->

    <div class="creator-popup center roms-popup">
        <div class="creator-grid">
            <div class="creator-img">
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
                <img src="/img/creator-img.jpg">
            </div>

            <div class="creator-about">
                <div class="creator-details">
                    <h2>Dylan Jabla</h2>
                </div>

                <div class="creator-details">
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
                <img src="/img/creator-img.jpg">
            </div>

            <div class="creator-about">
                <div class="creator-details">
                    <h2>Errol John Lagera</h2>
                </div>

                <div class="creator-details">
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
                <img src="/img/creator-img.jpg">
            </div>

            <div class="creator-about">
                <div class="creator-details">
                    <h2>Saeymond Charles Serrano</h2>
                </div>

                <div class="creator-details">
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
                        <h3>Directory</h3>
                        <ul>
                            <li><a href="seller-dashboard.html" class="underline">Dashboard</a></li>
                            <li><a href="seller-all-orders.html" class="underline">Orders</a></li>
                            <li><a href="seller-services.html" class="underline">Services</a></li>
                            <li><a href="seller-portfolio.html" class="underline">Portfolio</a></li>
                        </ul>
                    </div>

                    <div class="footer-column">
                        <h3>Creators</h3>
                        <ul>
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

            <span class="footer-divider"></span>

            <div class="footer-rights-container">
                <div class="footer-logo">
                    <a href="#">
                        <img src="img/logo.svg">
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
    <script src="<?php echo base_url();?>assets/js/nav-script.js"></script>
    <script src="<?php echo base_url();?>assets/js/footer-script.js"></script>
</body>

</html>