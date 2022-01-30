<?=isset($message) ? $message : "";?>
<div class = "message-container">
    <form method="POST">
        Sender
        <select name="senderId">
            <?php foreach($senders as $sender) : ?>
                <option value="<?=$sender['usersId']?>"><?=$sender['usersName']?></option>
            <?php endforeach; ?>
        </select>
        <br />

        Receiver
        <select name="receiverId">
            <?php foreach($receivers as $receive) : ?>
                <option value="<?=$receive['usersId']?>"><?=$receive['usersName']?></option>
            <?php endforeach; ?>
        </select>
        <br />

        Message Content
        <textarea name="messageContent" cols="20" rows="10"></textarea>

        <input type="submit" value="Send Message">
    </form>
    <button type="button"><a href="<?php echo base_url()."users/homepage"?>">Back</a></button>
</div>