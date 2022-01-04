<?php
    $this->load->view('templates/header.php');
?>
   

    <button type="button"><a href="<?php echo base_url()."categories/tradsarts"?>">Traditional Arts</a></button>
    <button type="button"><a href="<?php echo base_url()."categories/digital"?>">Digital</a></button>
    <button type="button"><a href="<?php echo base_url()."categories/Photography"?>">Photography</a></button>



<?php
    $this->load->view('templates/footer.php');
?>