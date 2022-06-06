<html>
<head>
<title>Assignment U08B</title>
<link href="U08B.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- jQuery code to select pizza size and add toppings checkbox -->
<script type="text/javascript">
$(document).ready(function () {
var size = 0;
$('select').change(function () {
size = ($(this).val());
addValue(size);
});
addValue(size);
function addValue(size) {
var total = 0;
total = parseFloat(size) + parseFloat(eval(allVals.join("+")));
$('p#total span').html(" $ " + total);
}
}
});
function rstmsg() {
    document.getElementById("f1").innerHTML = "";
    document.getElementById("price").innerHTML = "";
    document.getElementById("toppingPepp").innerHTML = "";
    document.getElementById("toppingMush").innerHTML = "";
    document.getElementById("toppingGppr").innerHTML = "";
    document.getElementById("toppingSaus").innerHTML = "";
}

</script>
</head>
<body>
    <header>
        <img src='kilroyspizza_resized.jpg' /> <br /> <br /> <br />
    </header>
    <div class="background">
        <div class="transbox">
            <div>
            <h1>Order Your Pizza Here</h1>
            <div>
            <h2>Select Your Pizza Size and Toppings</h2>
            <hr/>

            <form action="pizza.php" method="post">
            Name: <input type="text" id= "f1" name="name" />
            <br />
            <label>Select Pizza Size :</label>
            <select name="pizzaCost" id="price">
            <option value="12">Small Pizza - $12.00</option>
            <option value="15">Medium Pizza - $15.00</option>
            <option value="18">Large Pizza - $18.00</option>
            </select>
            <br><br>
            <div>
            <p><input type='checkbox' name='toppingPepp' value='3.00' id="toppingPepp"/><label for="toppingPepp"></label> Pepperoni $3.00
            </p>
            </div>
            <div>
            <p><input type='checkbox' name='toppingMush' value='3.00' id="toppingMush"/><label for="toppingMush"></label> Mushrooms $3.00
            </p>
            </div>
            <div>
            <p><input type='checkbox' name='toppingGppr' value='2.25' id="toppingGppr"/><label for="toppingGppr"></label>Green Peppers $2.25</p>
            </div>
            <div>
            <p><input type='checkbox' name='toppingSaus' value='3.50' id="toppingSaus"/><label for="toppingSaus"></label>Sausage $3.50</p>
            <p></p>
            </div>
            </div>
            <input type="submit" id="button" value=" Order Now " name="submit">
            <input id="rst" type="reset" onclick="rstmsg()" />
            </form>
            </div>
            </div>
        </div>
    </div>
</body>
</html>