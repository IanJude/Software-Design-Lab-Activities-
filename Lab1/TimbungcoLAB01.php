<html><head><title> Timbungco_Lab01 </title></head>
<body>
<?php

echo "Exercise A: <br>";
date_default_timezone_set('Asia/Manila');
$time = date("h:i A");
$date = gmdate("M d, Y");
echo "Date today is: $date<br>";
echo "Time right now is: $time<br><br>";

echo "Exercise B:<br>";
$name = "Ian Jude Timbungco";
$u_name = strtoupper($name);
echo "<b>Name: </b> $name<br><br>";
echo "<b> Circle </b><br>";
$area_circle = pi() * 23 * 23;
$circumference = 2 * pi() * 23;
$diameter = 2 * 23;
echo "<i>If the radius is  23 the area of the circle is:</i> $area_circle<br>";
echo "<i>If the radius is  23 the circumference of the circle is</i>: $circumference<br>";
echo "<i>If the radius is  23 the diameter of the circle is:</i> $diameter<br><br>";

echo "<b> Triangle </b><br>";
$area_triangle = 0.5 * 10 * 12;
echo "<i>If base is 10 and height is 12 the area of Triangle is: </i> $area_triangle<br><br>";

echo "<b> Celsius to Fahrenheit </b><br>";
$celsius = 5/9 * (50 - 32);
echo "50 Fahrenheit to Celsius is $celsius &degC<br><br>";

echo "<b>Peso to Dollar conversion</b><br>";
echo "<b>Conversion Rate:</b> \$1 = 54.25 Pesos<br>";
$conversion = 1500 / 54.25;
echo "1500 pesos in USD is \$$conversion"


?>
</body>
<html>
