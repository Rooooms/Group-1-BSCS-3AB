<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoCreate | Flex your beauty!</title>

    <!-- ===== ICON ===== -->
    <link rel="icon" type="image/png" href="<?php echo base_url('assets//img/logo.svg')?>">

    <!-- ===== BOX ICONS ===== -->
    <script src="https://kit.fontawesome.com/871663cc04.js" crossorigin="anonymous"></script>

    <!-- ===== GOOGLE FONTS ===== -->
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Goblin+One&family=Noto+Serif+Display:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Quicksand:wght@300;400;500;600;700&family=Ranchers&family=Slackey&family=Syne:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login-signup-styles.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login-signup-nav-styles.css')?>">
</head>

<body>
    <header>
        <nav class="nav-container">
            <div class="logo">
                <a class="header-logo" href="index.html"></a>
            </div>
        </nav>
    </header>

    <div class="overlay-design-container" id="overlay-design-container">
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel">
                    <h2 class="overlay-title">Flex your beauty!</h2>
                    <p class="overlay-description">Upload a profile picture for your profile.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="login-signup-container" id="login-signup-container">
        <div class="container">
            <div class="mobile-btn">
                <h3>Flex your beauty!</h3>
            </div>
            <div class="wrapper">
                <div class="image">
                    <img src="" id="photo">
                </div>

                <div class="content">
                    <div class="icon">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </div>
                    <div class="text">
                        Upload your profile picture <br><i>Photo must be in 1:1 ratio</i>
                    </div>
                </div>

                <div id="cancel-btn">
                    <i class="fas fa-times"></i>
                </div>

                <!-- <div class="file-name">
                    File name here
                </div> -->
            </div>
            <form method="post" enctype="multipart/form-data">
            <input type="file" onchange="displayImage(this)" name="profilepic" id="custom-btn" accept="image/*"></input> <br>        
            <button class="proceed-btn"><a type="submit">Continue</a></button>
            </form>
        </div>
    </div>

    <!--===== GSAP =====-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

    <!-- ===== JS ===== -->
    <script src="<?php echo base_url('assets/js/login-signup-animations.js')?>"></script>
    <script src="<?php echo base_url('assets/js/upload.js')?>"></script>
    <script>

        function displayImage(e){
            if(e.files[0]){
                var reader = new FileReader();
            }

            reader.onload = function(e){
                document.querySelector('#photo').setAttribute('src', e.target.result);
            }
            reader.readAsDataURL(e.files[0]);
        }
    </script>
</body>

</html>