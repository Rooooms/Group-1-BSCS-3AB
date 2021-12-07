<?php
    $this->load->view('templates/header');
?>

<form  method="post">
    <input type="radio" name="reserveVehicle" value="1" > Two Wheel</input>
    <input type="radio" name="reserveVehicle" value="2" > Three Wheel</input>
    <input type="date" name="reserveTimeIn" > Start Reserve</input>
    <input type="date" name="reserveTimeOut" > Finish Reserve</input>
    <input type="submit" value="submit">
    </form>

<?php
    $this->load->view('templates/header');
?>