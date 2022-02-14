<html><head><title>PHP TEST: Using Numbers</title></head>
<body bgcolor = black><font color=white>
<?php
echo "<b> Using Numbers </b><br>";
print "Today's date is ";
echo gmdate("M d Y");
echo "<br>";
$quantity = 30;
$price = 119.95;
$tax_rate = .05;
$total = $quantity * $price;
$total1 = $total + ($total * $tax_rate);
echo "You are purchasing <b> $quantity</b>widgets at a cost of <b>\$ $price</b> each. <br>";
echo "With a tax, the total comes to <b>\$ $total</b><br><br>";

define ("YEAR", "2005");
define ("INDAY", "July 4th");
echo "US Independence Day is ". INDAY." <br>";
echo "We are in a year ". YEAR."<br>";
echo "This server running version" . "<b>". PHP_VERSION."of the PHP on the ". PHP_OS. "</b><br><br>";

echo "<b> Single and Double Quotation Marks </b><br>";
$var = 'test';
echo "var is equal to $var<br>";
echo 'var is equal to $var<br>';

?>

</font>
</body>
</html>