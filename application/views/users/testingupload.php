<?php
    $this->load->view('templates/header');
?>

<form  method="post" enctype="multipart/form-data">
        <input type="file" name="image"></input><br>
        
        <input type="submit" value="Submit">
    </form>
    


<?php
    $this->load->view('templates/footer');
?>