<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Message</title>

    <!-- ===== ICON ===== -->
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/logo.svg')?>">

    <!-- ===== WEB ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- ===== GOOGLE FONTS ===== -->
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Outfit:wght@100;200;300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300;400;500;600;700&family=Syne:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/nav-styles.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/messaging-styles.css')?>">
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
                        <li><a href="<?php echo base_url()."categories/"?>">Browse by Category</a></li>
                        <li><a href="<?php echo base_url()."users/profile"?>">Profile</a></li>
                        <li><a href="buyer-settings.html">Settings</a></li>
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

    <section class="message-area">
        <div class="navigation-area-container">
            <div class="navigation-icons">
                <div class="back-btn">
                    <button>
                        <a href="<?php echo base_url()."messaging/inbox"?>">Back</a>
                    </button>
                </div>

                <div class="msg-title">
                    <h2>New Message</h2>
                </div>
            </div>
        </div>

        <div class="input-message-container">
            <div class="msg-form">
                <form method="post">
                    <div class="select-field">
                        <select name="receiverId" id="delivery-method">
                            <option disabled selected>Send Message To</option>
                            <?php foreach($receivers as $receive) : ?>
                            <option value="<?=$receive['usersUid']?>"><?=$receive['usersName']?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="text-field">
                        <textarea name="messageContent" id="" rows="5" placeholder="Type Message Here..."></textarea>
                    </div>

                    <div class="button-area">
                        <button>
                            <input type="submit" value="Send Message">
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- ===== JS ===== -->
    <script src="<?php echo base_url('assets/js/nav-script.js')?>"></script>
</body>

</html>
