
<?php
    $this->load->view('templates/header');
?>
    
<p>Add Project</p>
    <form  method="post" enctype="multipart/form-data">
            <p>Service Image   <input type="file" name="serviceImage"required></input><br>
            <p>Title of the Service   <input type="text" name="serviceTitle" placeholder="Enter Title Here"required><br>
            <p>Description of the Service   <input type="text" name="serviceDescrp" placeholder="Enter Description Here" required><br>
            <p>Category of the Service <select name="serviceCategory" id="gender"required><br>
            <option value="Digital Arts">Digital Arts</option>
            <option value="Graphics Arts">Graphics Arts</option>
            <option value="Photography">Photography</option>
            <option value="Publication Material">Publication Material</option>
            <option value="Traditional Arts">Traditional Arts</option>
            <option value="Typhography">Typhography</option>
            <option value="Website Design">Website Design</option>
            </select><br>
            <p>Price <input type="text" name="servicePrice" placeholder="Price"required><br>
            <p>Mode of Delivery <select name="serviceMOD"required><br>
            <option value="Physical Delivery">Physical Delivery</option>
            <option value="Digital Delivery">Digital Delivery</option>
            </select><br>
            <p>Time Frame of the Service<input type="text" name="serviceTimeFrame" placeholder="Time Frame"required><br>
            <input type="submit" value="Submit">
    </form>

<?php
    $this->load->view('templates/footer');
?>

