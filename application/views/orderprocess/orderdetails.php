<?php
    $this->load->view('templates/header');
?>

<h1><?php echo $data['serviceTitle']; ?></h1><br>
<img src="<?php echo $data['serviceImage'];?>" alt="" height="100px" width="100px"><br>
<p><?php echo $data['serviceDescrp']; ?></p>
<h3>Category: <?php echo $data['serviceCategory']; ?></h3>
<h2>Price: ₱<?php echo $data['servicePrice']; ?></h2>
<?php $info = $data['serviceId'] ?>

<button type="button"><a href="<?php echo base_url()?>orderprocess/addMode/<?php echo $info?>">Buy Now</a></button><br>

<?php
    $this->load->view('templates/footer');
?>