<div>
<?=isset($message) ? $message:"";?>
<br>
<a href="/php/users/Signup">Add User</a>
<br>
<br>
<table>
    <thead>
            <td>Username</td>
            <td>Email</td>
            <td>Uid</td>
            <td>Status</td>   
            <td>Action</td> 
    </thead>
    <tbody>
        <?php foreach($users as $user){?>
        <tr>
        <td><?php echo $user['usersName'];?></td>
        <td><?php echo $user['usersEmail'];?></td>
        <td><?php echo $user['usersUid'];?></td>
        <td><?php echo $user['status'];?></td>
        <td>
            <a href="/php/users/updateprofile/<?php echo $user['usersId'];?>">Update</a>

            <?php
            if($user['status'] == "Active"){ ?>
                <a href="/php/users/updateStatus/<?php echo $user['usersId'];?>/Inactive">Deactivate</a>
            <?php } else{ ?>
                <a href="/php/users/updateStatus/<?php echo $user['usersId'];?>/Active">Activate</a>
            <?php } ?>
        </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</div>
