<?=isset($message) ? $message: "";?>
<form  method="POST" action="/php/users/updateUser">

    <input type="hidden" name="usersId" value ="<?php echo $user['usersId']?>">
    Username <input type="text" name="usersName" value="<?php echo $user['usersName']?>"><br />
    Email <input type="email" name="usersEmail" value="<?php echo $user['usersEmail']?>"><br />    
    Uid <input type="text" name="usersUid" value="<?php echo $user['usersUid']?>"><br />
    <input type="submit" value="Update">
</form>


<a href="/php/users/getUser">Back to list of users</a>