<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoCreate | Get Started</title>

    <!-- ===== ICON ===== -->
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/logo.svg')?>">

    <!-- ===== BOX ICONS ===== -->
    <script src="https://kit.fontawesome.com/871663cc04.js" crossorigin="anonymous"></script>

    <!-- ===== GOOGLE FONTS ===== -->
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Outfit:wght@100;200;300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300;400;500;600;700&family=Syne:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login-signup-styles.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login-signup-nav-styles.css')?>">
</head>

<body>
    <header>
        <nav class="nav-container">
            <div class="logo">
                <a href="index.html"><img src="img/logo.svg" class="header-logo"></a>
            </div>
        </nav>
    </header>

    <div class="login-signup-container" id="login-signup-container">
        <div class="form-container">
            <form method="post">
                <h2 class="title">SIGN UP</h2>
                <div class="input-field">
                    <i class="fas fa-id-card"></i>
                    <input type="text" name="usersName" placeholder="Full Name"required>
                </div>

                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="usersUid" placeholder="User Name"required>
                </div>

                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="usersEmail" placeholder="Email"required>
                </div>

                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="usersPwd" placeholder="Password"required>
                </div>

                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="usersRptPwd" placeholder="Repeat Password"required>
                </div>

                <div class="chooseAccount">
                    <p>Register to GoCreate as a:</p>
                </div>

                <div class="radio-input">
                    <input type="radio" name="usersCategory" id="sellerRadio" value="Seller" required>
                    <label for="sellerRadio" class="sellerRadio">
                        <i class="fas fa-store"></i>
                        <span>Seller</span>
                    </label></input>

                    <input type="radio" name="usersCategory" id="buyerRadio" value="Buyer" required>
                    <label for="buyerRadio" class="buyerRadio">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Buyer</span>
                    </label></input>
                </div>

                <button>
                    <input type="submit" value="Next" class="btn">
                </button>

                <div class="extra-buttons mobile-btn">
                    <a href="login.html">LOG IN TO EXISTING ACCOUNT</a>
                </div>
            </form>
        </div>
    </div>

    <div class="overlay-design-container" id="overlay-design-container">
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel">
                    <h2 class="overlay-title">Hey, we know you!</h2>
                    <p class="overlay-description">Sign back in to keep creating!</p>
                    <a href="<?php echo base_url()."users/login"?>">Log In</a>
                </div>
            </div>
        </div>
    </div>

    <!--===== GSAP =====-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

    <!-- ===== JS ===== -->
    <script src="<?php echo base_url();?>assets/js/login-signup-animations.js"></script>
</body>

</html>