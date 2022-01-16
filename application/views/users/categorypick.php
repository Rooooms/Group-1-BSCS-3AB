
<?php
    $this->load->view('templates/header');
?>
    <form  method="post">
        <input type="checkbox" name="categoryPick[]" value= 'Digital Arts'>Digital Arts</input><br>
        <input type="checkbox" name="categoryPick[]" value= 'Graphics Arts'>Graphics Arts</input><br>
        <input type="checkbox" name="categoryPick[]" value= 'Photography'>Photography</input><br>
        <input type="checkbox" name="categoryPick[]" value= 'Publication Material'>Publication Material</input><br>
        <input type="checkbox" name="categoryPick[]" value= 'Traditional Arts'>Traditional Art</input><br>
        <input type="checkbox" name="categoryPick[]" value= 'Typhography'>Typhography</input><br>
        <input type="checkbox" name="categoryPick[]" value= 'Website Design'>Website Design</input><br>  
        <input type="submit" value="Submit">
    </form>

<?php
    $this->load->view('templates/footer');
?>

