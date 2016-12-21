<!DOCTYPE html>
<html>
<head>
<script language="javascript" type="text/javascript">
alert("TRIVIAAS!")
</script>

<script LANGUAGE="JavaScript">

  
var messages = new Array(6); 
messages[0] = "";
messages[1] = "Lucky Blue Smith";
messages[2] = "Blue-- especially navy and tiffany blue";	   
messages[3] = "My best friends are dane and therese <3";
messages[4] = "My favorite genre is EDM! Nothing beats classic trap style and house electro.";
messages[5] = "My favorite book is looking for alaska by John Green.";
function messageReveal() {
var messageindex = document.messageForm.messagePick.selectedIndex
document.messageForm.messageField.value = messages[messageindex];
}

</script>

</head>

</html>       


	<style>
		body {
			background-color: #FCEDEA;
		}
		h1 {
			color: black;
			text-align: center;
		}
		p {
			font-family: aubrey;
			font-size: 20px;
		}
		.active {
			background-color:transparent;
		}
		.city {
		    padding-left: 100px;
		   padding-right: 300px;
		   padding-top: 60px;
  			position: relative;
  			float: center;
  			background-color: #FFE1CA;
  			box-shadow: 1px 2px 20px #272532;
  			border-radius: 5px;
  			font-family: aubrey;
  			width: 500px;
  			height: 750px;
		   
		   text-align: center;
		}
		a:link, a:visited {
			background-color: #FFE1CA;
			color: black;
			padding: 30px 40px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-family: aubrey;
			font-size: 20px;

		}
		a:hover, a:active {
			background-color: black;
			color: white;
		}
		p{
			padding-right: 200px;
			padding-left: 200px;
		}
		#footer {
			position:fixed;
			left:0px; 
			bottom:0px;
			height:30px;
			width:100%;
			background:#999;

		}
		.form {
			padding-right: 190px;
			padding-left: 200px;
			text-align: center;
  			position: absolute;
  			float: center;
  			margin-top: 20px;
  			background-color: #FFE1CA;
  			box-shadow: 1px 2px 20px #272532;
  			border-radius: 5px;
  			font-family: georgia;
  			width: 500px;
  			height: 600px;
	}
	.error {color: #FF0000;}
		
			h2{
	  text-align: center;
	}
		textarea{
		  width: 300px;
		  height: 70px;
		  box-sizing: border-box;
		  border: 2px solid #ccc;
		  border-radius: 4px;
		  font-size: 18px;
		  background-color: white;
		  padding: 12px 20px 12px 40px;
}
				
		p{
		  padding-left: 40px;
		  padding-right: 60px;
		  color: #5B5552;
		}
		#formValid{
		  color: #5B5552;
		}
		#hide{
		  display: none;
		}
		input{
		  margin-left: 25px;
		}
		#submit{
			width: 200px;
			height: 40px;
		  position: absolute;
		  margin-left: 210px;
		}
		input[type=text], select {
		  width: 300px;
		  height: 50px;
		  padding: 12px 15px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 5px;
		  box-sizing: border-box;
		}
		.para2_white{
		  position: absolute;
		  font-family: georgia;
		  font-size: 14px;
		  color: #EEE7DA;
		  line-height: 0.5em;
		 }
		 .image1{
		 	z-index: -0.1px;
		 }
		  
		 }
}
	</style>
		<head>
		<body background="<?php echo base_url();?>/images/bg2.png" style="opacity: 1.5;">
			<center>
			<div style="padding-left:445px; padding-right:500px;">
			<img class="image1" src="<?php echo base_url();?>/images/girlheader.png" width="400px" height="563px" style="padding-top:1%;position:absolute;top:0;align:center">
				<img class="image2" src="<?php echo base_url();?>/images/finalheader.png" width="720px" height="140px" style=" padding-top:70%; position:relative; top:50">

</div>
	
	<br>
	<br>
	
	<body>
		<center>
			<a href="<?php echo base_url('index.php/AboutMe/index')?>"> About Me</a>
			<a href="<?php echo base_url('index.php/MyPassion/index')?>"> My Passions</a>
			<a href="<?php echo base_url('index.php/MyHobbies/index')?>"> My Hobbies </a>
			<a href="trivias.php">Trivias</a>
			<a href="<?php echo base_url('index.php/MyForm/index')?>"> PHP Form</a>
		</center>
	<br>
	<br>
	
	<center>
	<div class="city" id="trivia">
	<table align= "center">
			<tr align = "center">
	<u> <h2 style="font-family: century; font-size:35px; color:black; text align: center">TRIVIAS </h2> </u>
	
	<body>

		<center>
		<form name="messageForm">
			<p><select name="messagePick" OnChange="messageReveal()">
				<option value="0">The Menu Message</option>
				<option>My Model Crush</option>
				<option>My Favorite Colour</option>
				<option>My Bestest Friends</option>
				<option>My Favorite Genre</option>
				<option>My Favorite Book</option>
		</select> <br>
  </p>
  <p><textarea name="messageField" rows="5" cols="41" wrap="virtual"></textarea></p>
</form>
</center>
</body>

	<br>

	<p id="demo">My Role Model</p>

		<button type="button" onclick="document.getElementById('demo').innerHTML = 'Audrey Hepburn'">Click Me!</button>
	
	</br>
	<br>

	<p id="demo1">My Secret Talent</p>

			<button type="button2" onclick="document.getElementById('demo1').innerHTML = 'Rapping with guitar'">Click Me!</button>

	</br>
	<br>
	
	<p id="demo2">My Most Embarrasing Moment </p>

			<button type="button" onclick="document.getElementById('demo2').innerHTML = 'Farting infront of my crush'">Click Me!</button>
	
	</br>
	<br>
	
	<p id="demo3">My Terrible Weakness </p>

			<button type="button" onclick="document.getElementById('demo3').innerHTML = 'Food'">Click Me!</button>

	</br>
	</body>
	</center>
	</html>