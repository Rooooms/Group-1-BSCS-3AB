<?php
    $this->load->view('templates/header');
?>

<h3>Upload Profile Picture</h3>

<form  method="post" enctype="multipart/form-data">
        <input type="file" name="profilepic"></input><br>
        
        <input type="submit" value="Submit">
    </form>

<?php
    $this->load->view('templates/footer');
?>
