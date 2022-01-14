<?php
    $this->load->view('templates/header.php');
?>
   
    <button type="button"><a href="<?php echo base_url()."users/profile"?>">Profile</a></button>
    <button type="button"><a href="<?php echo base_url()."users/settings"?>">Settings</a></button>
    <button type="button"><a href="<?php echo base_url()."users/logout"?>">Log Out</a></button>
    <button type="button"><a href="<?php echo base_url()."messaging/index"?>">Messaging</a></button>



<?php
    $this->load->view('templates/footer.php');
?>