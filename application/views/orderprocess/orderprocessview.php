<?php
    $this->load->view('templates/header');
?>

<form method="post">
<h1>Order Process</h1>  
    <p>Mode of Delivery <select name="modedelivery"required><br>
        <option value="Physical Delivery">Physical Delivery</option>
        <option value="Digital Delivery">Digital Delivery</option>
    </select>
    </p>
    <p>Mode of Payment <select name="modepayment"required><br>
        <option value="Bank Transfer">Bank Transfer</option>
        <option value="G-Cash">G-Cash</option>
        <option value="Meet-up">Meet-up</option>
    </select>
    </p>
    <input type="submit" value="Buy Now">    
    </form>
    

<?php
    $this->load->view('templates/footer');
?>