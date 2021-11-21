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
    
    <section class="signup">
    <h2>Sign Up</h2>
    <form action="include/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="User Name/Email"><br>
        <input type="password" name= "pwd" placeholder="Password"> <br>
        <button type="submit" name="submit">login</button>
    </form>
    <?php
if (isset($_GET["error"])) {
    if($_GET["error"]=="emptyinput"){
        echo "<p>Fill up all the fields!</p>";
    }
    else if ($_GET["error"]=="wronglogin"){
        echo "<p>Incorrect Login Information!</p>";    
}
}
?>
    </section>
</body>
</html>