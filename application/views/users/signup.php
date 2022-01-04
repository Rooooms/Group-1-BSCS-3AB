
<?php
    $this->load->view('templates/header');
?>

<p>Sign Up Bitches</p>
    <form  method="post">
        <input type="text" name="usersName" placeholder="Full Name"required><br>
        <input type="email" name="usersEmail" placeholder="Email"required><br>
        <input type="text" name="usersUid" placeholder="User Name"required><br>
        <input type="password" name="usersPwd" placeholder="Password"required><br>
        <input type="password" name="usersRptPwd" placeholder="Repeat Password"required><br>
        <input type="radio" name="usersCategory" id="buyerRadio" value="Buyer" required>Buyer </input>
        <input type="radio" name="usersCategory" id="sellerRadio" value="Seller" required>Seller</input> <br>
        <input type="submit" value="Next">
    </form>

<?php
    $this->load->view('templates/footer');
?>

