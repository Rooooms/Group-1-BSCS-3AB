<?php
    $this->load->view('templates/header.php');
?>
   
<h1>GoCreate</h1> 
<ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">Gallery</a></li>
    <li><a href="#">Notification</a></li>
    <li><a href="#">Profile</a></li>
</ul>

</br></br>
<button type="button"><a href="<?php echo base_url()."users/tradarts"?>">Traditional Arts</a></button>
<button type="button"><a href="<?php echo base_url()."users/digitalarts"?>">Digital Arts</a></button>
<button type="button"><a href="<?php echo base_url()."users/photography"?>">Photography</a></button>
<button type="button"><a href="<?php echo base_url()."users/typography"?>">Typography</a></button>
<button type="button"><a href="<?php echo base_url()."users/graphicdes"?>">Graphics Design</a></button>
<button type="button"><a href="<?php echo base_url()."users/pubmats"?>">Pubmats</a></button>
<button type="button"><a href="<?php echo base_url()."users/webdes"?>">Web Design</a></button>
<button type="button"><a href="<?php echo base_url()."users/animation"?>">Animation</a></button>
</br></br></br>
<h1>Popular Jobs</h1>
<button type="button"><a href="<?php echo base_url()."users/tradarts"?>">Traditional Arts</a></button>
<button type="button"><a href="<?php echo base_url()."users/digitalarts"?>">Digital Arts</a></button>
<button type="button"><a href="<?php echo base_url()."users/photography"?>">Photography</a></button>
</br></br></br>
<h1>Categories</h1>
<button type="button"><a href="<?php echo base_url()."users/tradarts"?>">Traditional Arts</a></button>
<button type="button"><a href="<?php echo base_url()."users/digitalarts"?>">Digital Arts</a></button>
<button type="button"><a href="<?php echo base_url()."users/photography"?>">Photography</a></button>
<button type="button"><a href="<?php echo base_url()."users/typography"?>">Typography</a></button>
<button type="button"><a href="<?php echo base_url()."users/graphicdes"?>">Graphics Design</a></button>
<button type="button"><a href="<?php echo base_url()."users/pubmats"?>">Pubmats</a></button>
<button type="button"><a href="<?php echo base_url()."users/webdes"?>">Web Design</a></button>
<button type="button"><a href="<?php echo base_url()."users/animation"?>">Animation</a></button>


<?php
    $this->load->view('templates/footer.php');
?>