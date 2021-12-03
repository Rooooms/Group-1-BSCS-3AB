<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="wrapper">
            <ul>
            <li><a href="index.php">Home</a></li>
                <?php
                if(isset($_SESSION["useruid"])){
                    
                    echo "<li><a href='register.php'>Sign Up</a></li>";
                    echo "<li><a href='login.php'>Log In</a></li>";
                }
                else{
                    echo "<li><a href='profile.php'>Profile Page</a></li>";
                    echo "<li><a href='include/logout.php'>Log Out</a></li>";
                    
                }
                ?>  
            </ul>
        </div>
    </nav>
</body>
</html>