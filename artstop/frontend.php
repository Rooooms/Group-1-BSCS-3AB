<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoCreate | Get Started</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Goblin+One&family=Noto+Serif+Display:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Quicksand:wght@300;400;500;600;700&family=Ranchers&family=Slackey&family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/871663cc04.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container" id="container">
        <section class="form-container sign-up-container">
            <form action="include/signup.php" method="post">
                <h2 class="title">SIGN UP</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="uid" placeholder="Username">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="E-mail">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-id-card"></i>
                        <input type="text" name="name" placeholder="Full Name">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="pwd" placeholder="Password">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="pwdrepeat" placeholder="Confirm Password">
                    </div>
                    <div class="chooseAccount">
                        <p>Register to GoCreate as:</p>
                    </div>
                    <div class="radio-input">
                        <input type="radio" name="category" id="sellerRadio" value="seller">
                        <label for="sellerRadio" class="sellerRadio">
                            <i class="fas fa-store"></i>
                            <span>Seller</span>
                        </label>

                        <input type="radio" name="category" id="buyerRadio" value="buyer">
                        <label for="buyerRadio" class="buyerRadio">
                            <i class="fas fa-shopping-cart"></i>
                            <span>Buyer</span>
                        </label>
                    </div>
                    <div class="btn solid">
                    <button type="submit" name="submit" >Sign Up</button>
                </div>
            </form>
        </section>
        <div class="form-container sign-in-container">
            <form action="index.php" method="post">
                <h2 class="title">SIGN IN</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="uid" placeholder="Username or E-mail">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="pwd" placeholder="Password">
                </div>
                <div class="btn solid">
                    <button type="submit" name="login" >Log In</button>
                </div>
                
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h2 class="overlay-title">You're back!</h2>
                    <p class="overlay-description">Sign back in to keep creating!</p>
                    <button id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h2 class="overlay-title">New to GoCreate?</h2>
                    <p class="overlay-description">Create an account and start your journey as a creative!</p>
                    <button id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="main.js"> </script>
</body>
</html>