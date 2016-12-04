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
			background-image: url("white.png");
			background-color: white;
		}
		h1 {
			color: black;
			text-align: center;
		}
		p {
			font-family: georgia;
			font-size: 20px;
		}
		.active {
			background-color:transparent;
		}
		.city {
		   float: center;
		   margin: 10px;
		   padding: 10px;
		   max-width: 900px;
		   height: 800px;
		   border: 5px solid black;
		   text-align: center;
		}
		a:link, a:visited {
			background-color: black;
			color: white;
			padding: 14px 25px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-family: georgia;
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
	}
	</style>
		<head>
			<center>
				<img class="p_absolute" src="<?php echo base_url();?>/images/finalheader.png" width="720px" height="140px" style="border-top-left-radius: 15px; border-top-right-radius: 10px;">
			</center>
		</head>
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