
<?php
    $this->load->view('templates/header');
?>

<p>Log In Bitches</p>
    <form  method="post">
        <input type="text" name="usersUid" placeholder="User Name"required><br>
        <input type="password" name="usersPwd" placeholder="Password"required><br>     
        <input type="submit" value="Submit">
    </form>

<?php
    $this->load->view('templates/footer');
?>

