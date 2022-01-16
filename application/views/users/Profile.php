<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    
    <h1>Profile</h1>

    <img src="<?php echo $user['profilepic']?>" alt="">
    <h3><b><?php echo $user['usersName']?></b></h3>
    <h3><b><?php echo $user['usersUid']?></b></h3>


</body>
</html>