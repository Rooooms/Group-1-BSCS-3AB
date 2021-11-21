<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <section class="signup">

    <h2>Sign Up</h2>

    <form action="include/signup.php" method="post">
        <input type="text" name="name" placeholder="Fullname" required><br>
        <input type="email" name="email" placeholder="Email Address" required><br>
        <input type="text" name="uid" placeholder="User Name" required><br>
        <input type="password" name="pwd" placeholder="Password" required><br>
        <input type="password" name="pwdrepeat" placeholder="Repeat Password" required><br>
        <input type="radio" id="buyer" name="category" value="buyer">
        <label for="buyer">Buyer</label>
        <input type="radio" id="seller" name="category" value="seller">
        <label for="seller">Seller</label>
        <br>
        <button type="submit" name="submit">Sign Up</button>
    </form>
    <?php

if (isset($_GET["error"])) {
    if($_GET["error"]=="emptyinput"){
        echo "<p>Fill up all the fields!</p>";
    }
    else if ($_GET["error"]=="invaliduid"){
        echo "<p>Choose Proper Username!</p>";
    }
    else if ($_GET["error"]=="invalidemail"){
        echo "<p>Choose Proper Email Address!</p>";
    }
    else if ($_GET["error"]=="passwordnotmatch"){
        echo "<p>Password Not Match!</p>";
    }
    else if ($_GET["error"]=="stmtfailed"){
        echo "<p>Something Went Wrong, try again!</p>";
    }
    else if ($_GET["error"]=="usernametaken"){
        echo "<p>Username already taken!</p>";
    }
    else if ($_GET["error"]=="none"){
        echo "<p>You already Signed Up!</p>";
    }

}

?>
    </section>

   

</body>
</html>