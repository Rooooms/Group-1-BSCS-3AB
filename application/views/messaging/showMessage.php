<?php
    $this->load->view('templates/header.php');  
?>

<?php
    foreach($msg as $msgs) {?>
        <p><?php echo $msgs['senderId']; ?> said </p>
        <p><?php echo $msgs['messageContent']; ?></p>
        <p>-----------------------</p>
<?php } ?>

<?php
    $this->load->view('templates/footer.php');
?>