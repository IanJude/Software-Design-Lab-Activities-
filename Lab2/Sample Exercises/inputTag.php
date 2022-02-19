<html><head><title> Use of Input Types Form Tag in PHP </title></head>
<body>
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
<input type="checkbox" name = "choice3" value= "Snorkling in Cebu"> Snorkling in Cebu?<br><br>

<b> Radio Buttons </b><br><br>
<i>Which do you prefer the most?</i><br>
<input type="radio" name = "r1" value = "Microsoft"> Microsoft<br>
<input type="radio" name = "r1" value = "Open Source"> Open Source<br>


<b> List Boxes </b> <br><br>
<i> Which prices do you prefer most in shopping for clothings? </i><br>
<select name ="price">
	<option> Under P5000 </option>
	<option> P5000 - P1000 </option>
	<option> P11000 - P25000 </option>
	<option> Over P25000 </option>
</select><br><br> <br><br><br><br>
</form>
</body>
</html>