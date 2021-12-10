<?php
    $this->load->view('templates/header.php');
?>
   

    <button type="button"><a href="<?php echo base_url()."users/login"?>">Login</a></button>
    <button type="button"><a href="<?php echo base_url()."users/signup"?>">Signup</a></button>



<?php
    $this->load->view('templates/footer.php');
?>