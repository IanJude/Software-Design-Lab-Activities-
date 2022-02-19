<html> 
    <head> 
          
        <!-- CSS property to place div
            side by side -->
        <style> 
            #leftbox {
                float:left; 
				background-color:#5F9EA0;
                width:26%;
                height:35px;
		
            }
            #rightbox{
                float:left;
				background-color:#5F9EA0;
                width:20%;
                height:35px;
            }
			# upperbox {
				float:left;
				background:Red;
				width : 46%;
				height : 280px;
			}
			
          
        </style> 
    </head> 
      
    <body> 
	<form action = "Timbungco_Lab02.php" method = "get">
		
        <div id = "boxes">
			
            <div id = "leftbox">
				<div id="div4"><b>Workshop Registration</b></div><br>
                <u> Register now while seats are available! </u><br><br>
				First Name:
 			<input type = "text" fname = "first"><br><br>

				Last Name: 
			<input type = "text" lname = "last"><br><br>
			<br>
			
				Company Institution: 
			<input type = "text" company = "company"><br><br>
			<br>

				Address 
			<textarea name = "w" cols = "10" rows = "-10"></textarea><br><br>
			
				City
			<textarea name = "c" cols = "10" rows = "-10"></textarea><br><br>
			
			State/Province/Region 
			<select name ="price">
			<option> -----Select----- </option>
			<option> NCR </option>
			<option> CAR </option>
			<option> Region I </option>
			<option> Region II </option>
			<option> Region III </option>
			<option> Region IV-A </option>
			<option> Region IV-B </option>
			<option> Region V </option>
			<option> Region VI </option>
			<option> Region VII </option>
			<option> Region VIII </option>
			<option> Region IX </option>
			<option> Region X </option>
			<option> Region XI </option>
			<option> Region XII </option>
			<option> Region XIII </option>
			<option> BARMM </option>
			</select><br><br>
		
			Country
			<select name ="country">
			<option> -----Select----- </option>
			<option> PHILIPPINES </option>
		</select><br><br>
		
				Email:
			<textarea name = "w" cols = "10" rows = "-10"></textarea><br><br>
			
				Phone Number:
			<textarea name = "c" cols = "10" rows = "-10"></textarea><br><br>
		
		
			
			
            </div> 
              
            <div id = "rightbox">
                <br><br><br><br>
				<u> Lunch</u><br><br>
				
				<b>Meal Preference </b>
				<select name ="meal">
				<option> Vegetarian </option>
				<option> Meat Lover </option>
			</select><br><br><br><br>
		
		<u> Payment Details </u>
		
		<input type="checkbox" name = "choice1" value= "Cash"> Cash<br>
		<input type="checkbox" name = "choice2" value= "Cheque"> Cheque<br>
		<input type="checkbox" name = "choice3" value= "Demand Draft"> Demand Draft<br><br>
		
			DD/Cheque No.
			<textarea name = "w" cols = "10" rows = "-10"></textarea><br><br>
			
			Drawn On (Bank Name)
			<textarea name = "c" cols = "10" rows = "-10"></textarea><br><br>
			
			Payable at
			<textarea name = "c" cols = "10" rows = "-10"></textarea><br><br><br><br><br><br><br><br>
		
		
		
		<input type="submit">
		<input type="reset">
			<br>
			

            </div>
        </div>
    </body> 
</html>   