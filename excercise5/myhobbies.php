<!DOCTYPE html>
<html>
<head>
<script language="javascript" type="text/javascript">
alert("My Hobbies!")
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
			background-image: url("bg.jpg");
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
		   background-color: white;
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
				<img src="finalheader.png">
			</center>
		</head>
	<br>
	<br>
	
	<body>
		<center>
			<a href="aboutme.php">About Me</a>
			<a href="mypassion.php">My Passions</a>
			<a href="myhobbies.php">My Hobbies </a>
			<a href="trivias.php">Trivias</a>
			<a href="form.php">PHP Form</a>
		</center>
	<br>
	<br>
	
	<center>
	
	<div class="city" id="hobbies">
	  <u> <h2 style="font-family: century; font-size:35px; color:black; text align: center">MY HOBBIES </h2> </u>
	<br> 
		  <img src="books2.jpg" width="250" height="250" alt="Jhenina"> <img src="guitar.jpg" width="250" height="250" alt="Jhenina"> 
		  <img src="badminton.jpg" width="250" height="250" alt="Jhenina">
	<br>
		<i> <p> <strong>Playing the guitar and drums, fitness aka badminton, reading books</strong></p> </i>
	  
			<p text align="justify">I do lots of things in my pastime so I make sure to be productive 
				always so first of all, I engage with my favorite sport: Badminton. I learned a few years back and from time to time, I join competitions in 
				our place and I am blessed by taking home the bacon at times. I learned the art of hardwork and sacrifice, even at the times you want to give up
				you should push yourself. Also, I love music. I immediately had a connection with the guitar. Plus I'm a huge book addict! The art of reading books
				will not be denied. <p> 
		<br>
			<a href="http://www.themillions.com/" target="_blank">MY FAVE SITE</a>
	
	</div>