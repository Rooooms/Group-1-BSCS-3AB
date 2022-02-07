
<?php
    $this->load->view('templates/header');
?>
    
<p>Add Project</p>
    <form  method="post" enctype="multipart/form-data">
            <p>Project Image   <input type="file" name="projectImage"required></input><br>
            <p>Title of the Project   <input type="text" name="projectTitle" placeholder="Enter Title Here"required><br>
            <p>Category of the Project <select name="projectCategory" required><br>
            <option value="Digital Arts">Digital Arts</option>
            <option value="Graphics Arts">Graphics Arts</option>
            <option value="Photography">Photography</option>
            <option value="Publication Material">Publication Material</option>
            <option value="Traditional Arts">Traditional Arts</option>
            <option value="Typhography">Typhography</option>
            <option value="Website Design">Website Design</option>
            <input type="submit" value="Submit">
    </form>

<?php
    $this->load->view('templates/footer');
?>

