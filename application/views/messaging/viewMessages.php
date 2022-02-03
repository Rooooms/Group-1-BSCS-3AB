<?=isset($message) ? $message : "";?>
<button type="button"><a href="<?php echo base_url()."users/buyerhomepage"?>">Back</a></button>
<div class = "message-container">
    <form method="POST">

        Message Content
        <textarea name="messageContent" cols="20" rows="10"></textarea>

        <input type="submit" value="Send Message">
    </form>
</div>
<form method="POST" action="/messages/addMessage">
    <input type="hidden" name="messageId" value="<?=$message[0]['messageid']?>">
    Sender
    <input type="hidden" name="senderId" value="<?=$message[0]['senderId']?>">
    <input type="text" value="<?=$sender[0]['username']?>">
    <br />

    Receiver
    <input type="hidden" name="receiverId" value="<?=$message[0]['receiverId']?>">
    <input type="text" value="<?=$receiver[0]['username']?>">
    <br />

    Messages
    <table>
        <tr>
            <td>Message</td>
            <td>Date Sent</td>
        </tr>
        <?php
            foreach($message as $msg) :
        ?>
                <tr>
                    <td><?php echo $msg['messageContent'];?></td>
                    <td><?php echo $msg['dateCreated'];?></td>
                </tr>
        <?php endforeach; ?>
    </table>

    Message Content
    <textarea name="messageContent" cols="20" rows="10"></textarea>

    <input type="submit" value="Reply Message">


</form>

