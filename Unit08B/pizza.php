<?php
// Get pizza data sent by POST
// isset() tests for data at the gateway, required on many servers
// Use of PHP
// use a webform
// use of PHP conditional statements
// Created client server event using PHP and webpage
if(isset($_POST["name"])) { $name = $_POST["name"]; } else { $name = ""; }
if (isset($_POST['submit'])) {
    // initialized toppings variable for amount
    $toppingPepp = 0;
    $toppingMush = 0;
    $toppingGppr = 0;
    $toppingSaus = 0;
    // Intialize topping names
    $toppingName1 = '';
    $toppingName2 = '';
    $toppingName3 = '';
    $toppingName4 = '';
    // Create an array for pizza toppings, to display with commas
    $pizzaToppings = array();
    $pizzaCost = $_POST['pizzaCost'];
    if ($pizzaCost == 12) {
    $pizzaName = 'Small Pizza';
    } else if ($pizzaCost == 15) {
    $pizzaName = 'Medium Pizza';
    } else if ($pizzaCost == 18) {
    $pizzaName = 'Large Pizza';
    }
    if (isset($_POST['toppingPepp'])) {
    $toppingPepp = 3.00;
    array_push($pizzaToppings, "Pepperoni");
    }
    if (isset($_POST['toppingMush'])) {
    $toppingMush = 3.00;
    array_push($pizzaToppings, "Mushrooms");
    }
    if (isset($_POST['toppingGppr'])) {
    $toppingGppr = 2.25;
    array_push($pizzaToppings, "Green Peppers");
    }
    if (isset($_POST['toppingSaus'])) {
    $toppingSaus = 3.50;
    array_push($pizzaToppings, "Sausage");
    }
    //total cost
    $pizzaPrice = $pizzaCost + $toppingPepp + $toppingMush + $toppingGppr + $toppingSaus;
    $List = implode(', ', $pizzaToppings);
    //final topping details
    $pizzaPriceToPrint = number_format($pizzaPrice, 2);
    echo "<p><center><img src='https://ianlorimer122.github.io/pictures/kilroyspizza_resized.jpg'></center></p>";
    print "<center><h2>Pizza Order for $name </h2></center>";
    print "<center><h2>You ordered a $pizzaName with $List </h2></center>";
    print "<center><h2>Your total cost is $$pizzaPriceToPrint </h2></center>";
    echo "<p><center><img src='https://ianlorimer122.github.io/pictures/IMG_0702a.jpg'></center></p>";
    echo '<body style="background-color:lawngreen">';

}
?>