<html>
<head>
    <title>Timbungco_Prelim Exam</title>
</head>
 
<body><center>
    <h1>
        ARITHMETIC OPERATIONS 
    </h1>
 
    <h3>Addition</h3>
    <h3>Subtraction</h3>
    <h3>Multiplication</h3>
	<h3>Division</h3>
	<h3>Average</h3>
     
    <form method="post">

		Enter value for X : <input type="text" name="num1" value=""><br><br>
		Enter value for Y : <input type="text" name="num2" value=""><br><br>
        
                <b> List of Operations</b><br><br>
					<input type="checkbox" name = "Sum" value= "">Addition<br>
					<input type="checkbox" name = "Subtract" value= ""> Subtraction<br>
					<input type="checkbox" name = "Product" value= ""> Multiplication<br>
					<input type="checkbox" name = "Quotient" value= ""> Division<br>
					<input type="checkbox" name = "Average" value= ""> Average<br>
					<br>
				<input type="submit" name="submit" value="Submit"/>
		<br>
    </form>
</center>
 
<?php

if(isset($_POST["submit"])) 
{
    $x = $_POST["num1"];
    $y = $_POST["num2"];

}?>

<textarea rows="10" cols="25">

Addition : <?php if (isset($_POST["Sum"]))
{
	echo (round($x + $y,2));
}?>

Subtraction : <?php if (isset($_POST["Subtract"]))
{
	echo (round($x - $y,2));
}?>

Multiplication : <?php if (isset($_POST["Product"]))
{
	echo (round($x * $y,2));
}?>

Division: <?php if (isset($_POST["Quotient"]))
{
	echo (round($x / $y,2));
}?>

Average: <?php if (isset($_POST["Average"]))
{
	echo (round(($x + $y)/2,));
}?>

</textarea>
</body>
</html>