<!DOCTYPE html>
<html>
<head>
<script language="javascript" type="text/javascript">
alert("My Passions!")
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
			<a href="mypassion.php">My Passions</a>
			<a href="<?php echo base_url('index.php/MyHobbies/index')?>"> My Hobbies </a>
			<a href="<?php echo base_url('index.php/MyTrivias/index')?>"> Trivias</a>
			<a href="<?php echo base_url('index.php/MyForm/index')?>"> PHP Form</a>
		</center>
	<br>
	<br>
	
	<center>
	
	<div class="city" id="passions">
	  <u> <h2 style="font-family: century; font-size:35px; color:black; text align: center">MY PASSIONS </h2> </u>
		  <br> <img class="p_absolute" src="<?php echo base_url();?>/images/books.jpg" width="720px" height="140px" style="border-top-left-radius: 15px; border-top-right-radius: 10px;">
		  <img class="p_absolute" src="<?php echo base_url();?>/images/van.jpg" width="720px" height="140px" style="border-top-left-radius: 15px; border-top-right-radius: 10px;">
	  </br>
	  
	  <br> 
	  <i> <p> <strong>Writing, poetry, photography, and styling </strong></p> </i>
	  <p> Whenever I engage into these passions, it feeds my soul. 
		It makes me happier than ever. With writing, I am able to express myself and my emotions through poetry. And with that I believe that
		every photo tells a story. So with every capture I take, there is a bliss of emotion behind it. With styling, it makes me feel better
		since I own a clothing line, fashion is a prerequisite. It's like forming something simple to art. These passions expanded my way
		of thinking and enhanced my creativity. </h2> </p> </br>
	<a href="http://www.instagram.com/jhxnina" target="_blank">MY PHOTOGRAPHY</a>		
	
	</div>