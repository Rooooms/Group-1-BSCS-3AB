<?=isset($message) ? $message : "";?>
<button type="button"><a href="<?php echo base_url()."users/buyerhomepage"?>">Back</a></button>
<div class = "message-container">
    <form method="POST">
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
</div>