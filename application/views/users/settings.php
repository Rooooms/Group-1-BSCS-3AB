<?php
    $this->load->view('templates/header.php');
?>
   

    <button type="button"><a href="<?php echo base_url()."users/updateprofile"?>">Update Profile</a></button>
    <button type="button"><a href="<?php echo base_url()."users/deleteaccount"?>">Delete Account</a></button>



<?php
    $this->load->view('templates/footer.php');
?>