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
			<a href="aboutme.php">About Me</a>
			<a href="<?php echo base_url('index.php/MyPassion/index')?>">  My Passions </a>
			<a href="<?php echo base_url('index.php/MyHobbies/index')?>"> My Hobbies </a>
			<a href="<?php echo base_url('index.php/MyTrivias/index')?>"> Trivias</a>
			<a href="<?php echo base_url('index.php/MyForm/index')?>"> PHP Form</a>
		</center>
	<br>
	<br>
	
<script>

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
	<table align= "center">
			<tr align = "center">
		<h2 style="font-family: century; font-size:35px; color:black; text align: center">ABOUT ME </h2> </u>
		
			<tr>
			<img class="p_absolute" src="<?php echo base_url();?>/images/selfie.jpg" width="250px" height="250px" style="border-top-left-radius: 15px; border-top-right-radius: 10px; alt="Jhenina">

			 <img class="p_absolute" src="<?php echo base_url();?>/images/shadow.jpg" width="250px" height="250px" style="border-top-left-radius: 15px; border-top-right-radius: 10px; alt="Jhenina">
			<img class="p_absolute" src="<?php echo base_url();?>/images/city.jpg" width="250px" height="250px" style="border-top-left-radius: 15px; border-top-right-radius: 10px; alt="Jhenina">
			 <img class="p_absolute" src="<?php echo base_url();?>/images/arte.jpg" width="250px" height="250px" style="border-top-left-radius: 15px; border-top-right-radius: 10px; alt="Jhenina">
			
				<p><h2 style="font-family: courier; font-size:20px; color:black; text align: center">JHENINA STA. CRUZ</h2> </p>
				<p> <h2 style="font-family: courier; font-size:20px; color:black; text align: center">SINCE '98</h2> </p>
		<a href="http://www.jheninamonique.wix.com/jhxnina" target="_blank">MY BLOG</a>
</tr>
	</div>