<html><head><title> Use of Input Types Form Tag in PHP </title></head>
<body bgcolor= "99ffff">
<form action="input_types.php" method="post">

<b> Text Fields </b><br><br>
<i>Enter Your Name:</i> 
<input type="text" name="name"><br><br>

<i>Enter Your Age:</i> 
<input type ="text" age = "age"><br><br>

<b> CheckBox </b><br><br>
<i>Have you eaten an apple?<br>
<input type="checkbox" name = "choice"> Yes<br><br>

<b> Multiple Checkboxes</b><br><br>
<input type="checkbox" name = "choice1" value= "Diving in Anilao"> Diving in Anilao?<br>
<input type="checkbox" name = "choice2" value= "Surfing in Siargo"> Surfing in Siargao?<br>
<input type="checkbox" name = "choice3" value= "Eating a cockroach"> Eating a cockroach?<br><br>

<b> Radio Buttons </b><br><br>
<i>Which do you prefer the most?</i><br>
<input type="radio" name = "q1" value = "Microsoft"> Microsoft<br>
<input type="radio" name = "q2" value = "Open Source"> Open Source<br>
<input type="radio" name = "q3" value = "No comment"> No Comment<br>

<b> List Boxes </b> <br><br>
<i> Which prices do you prefer most in shopping for clothings? </i><br>
<select name ="price">
	<option> Under P200 </option>
	<option> P300 - P5900 </option>
	<option> P500 - P1000 </option>
	<option> Over P1000 </option>
</select><br><br> <br><br><br><br>

What size are you in pants? <br>
<select name = "pantSize[]" multiple>
	<option> Small </option>
	<option> Medium </option>
	<option> Large </option>
	<option> Extra Large </option>
</select> <br><br>

<b> Text Area </b><br>
Enter Comments here: <br>
<textarea name = "w" cols = "50" rows = "5"></textarea><br><br>
<input type = "submit" value = "See Results">
<input type = "Reset" value = "Clear">
</form>
</body>
</html>