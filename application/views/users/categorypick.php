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
    <link rel="stylesheet" href="<?php echo base_url('assets/css/signup-preferred-categories-styles.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login-signup-nav-styles.css')?>">
</head>

<body>
    <header>
        <nav class="nav-container">
            <div class="logo">
                <a href="index.html"><img src="<?php echo base_url('assets/img/logo.svg')?>" class="header-logo"></a>
            </div>
        </nav>
    </header>

    <div class="overlay-design-container" id="overlay-design-container">
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel">
                    <h2 class="overlay-title">You're almost there!</h2>
                    <p class="overlay-description">Select three (3) of your preferred categories so we can tailor the
                        home page for you!</p>
                </div>
            </div>
        </div>
    </div>


    <div class="login-signup-container" id="login-signup-container">
        <div class="form-container">
            <form method="post">
                <div class="input-field">
                    <input type="checkbox" class="checkbox" id="digital-art" name="categoryPick[]" value="Digital Arts"
                        onclick="control(0)">
                    <label for="digital-art">
                        <div class="pref">Digital Art</div>
                    </label>
                </div>


                <div class="input-field">
                    <input type="checkbox" class="checkbox" id="graphic-design" name="categoryPick[]" value="Graphics Arts"
                        onclick="control(1)">
                    <label for="graphic-design">
                        <div class="pref">graphic design</div>
                    </label>
                </div>


                <div class="input-field">
                    <input type="checkbox" class="checkbox" id="phtography" name="categoryPick[]" value="Photography" onclick="control(2)">
                    <label for="phtography">
                        <div class="pref">photography</div>
                    </label>
                </div>


                <div class="input-field">
                    <input type="checkbox" class="checkbox" id="publication-material" name="categoryPick[]" value="Publication Material"
                        onclick="control(3)">
                    <label for="publication-material">
                        <div class="pref">publication material</div>
                    </label>
                </div>


                <div class="input-field">
                    <input type="checkbox" class="checkbox" id="traditional-art" name="categoryPick[]" value="Traditional Arts"
                        onclick="control(4)">
                    <label for="traditional-art">
                        <div class="pref">Traditional Art</div>
                    </label>
                </div>


                <div class="input-field">
                    <input type="checkbox" class="checkbox" id="typography" name="categoryPick[]" value="Typography" onclick="control(5)">
                    <label for="typography">
                        <div class="pref">typography</div>
                    </label>
                </div>


                <div class="input-field">
                    <input type="checkbox" class="checkbox" id="website-design" name="categoryPick[]" value="Website Design"
                        onclick="control(6)">
                    <label for="website-design">
                        <div class="pref">website design</div>
                    </label>
                </div>

                <button class="continue-btn">
                    <a> <input type="submit" value="Continue" class="button"> </a>
                </button>
            </form>
        </div>
    </div>

    <!--===== GSAP =====-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

    <!-- ===== JS ===== -->
    <script src="<?php echo base_url('assets/js/login-signup-animations.js')?>"></script>
    <script src="<?php echo base_url('assets/js/signup-preferred-categories.js')?>"></script>
</body>

</html>