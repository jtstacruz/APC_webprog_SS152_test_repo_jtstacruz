<!DOCTYPE html>
<html>
<head>
<script language="javascript" type="text/javascript">
alert("About ME!")
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
			<a href="aboutme.php">About Me</a>
			<a href="<?php echo base_url('index.php/MyPassion/index')?>">  My Passions </a>
			<a href="<?php echo base_url('index.php/MyHobbies/index')?>"> My Hobbies </a>
			<a href="<?php echo base_url('index.php/MyTrivias/index')?>"> Trivias</a>
			<a href="<?php echo base_url('index.php/MyForm/index')?>"> PHP Form</a>
		</center>
	<br>
	<br>
	
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
	
	<center>
	<div class="city" id="aboutme"> 
		<u> <h2 style="font-family: century; font-size:35px; color:black; text align: center">ABOUT ME </h2> </u>
			<img src="selfie.jpg" width="250" height="250" alt="Jhenina"> <img src="city.jpg" width="250" height="250" alt="Jhenina"> 
	<br>
			<img src="shadow.jpg" width="250" height="250" alt="Jhenina"> <img src="arte.jpg" width="250" height="250" alt="Jhenina"> </br>
				<p><h2 style="font-family: courier; font-size:20px; color:black; text align: center">JHENINA STA. CRUZ</h2> </p>
				<p> <h2 style="font-family: courier; font-size:20px; color:black; text align: center">SINCE '98</h2> </p>
		<a href="http://www.jheninamonique.wix.com/jhxnina" target="_blank">MY BLOG</a>
	</div>