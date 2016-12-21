<!DOCTYPE html>
<html>
<head>
<script language="javascript" type="text/javascript">
alert("Welcome to Jhenina's Amazing Website!")
<title> Form Validation </title>
</script>

</head>   

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
		   float: center;
		   margin: 10px;
		   padding: 10px;
		   max-width: 900px;
		   height: 800px;

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
			<a href="<?php echo base_url('index.php/MyTrivias/index')?>"> Trivias</a>
			<a href="form.php">PHP Form</a>
		</center>

	</body>
	</center>
	</div>

	<br>
	<br>
	
	
	<center>
	<br>
	<br>

	<div class="city">

	<div class= "form">
	<h2>Form Validation </h2>
	<p><span class="error">* required field.</span></p>
	<form method="post" action="<?php echo base_url();?>index.php/users/insert_user_db">  
		<table align= "center">
			<tr align = "center">
				<td>
				<a href = ""> View Form Records </a></td>
			</tr>
			
			
		
			<tr>
				<td>
					<input type="text" name="name" placeholder = "Name" required">
					<span class="error">* <br></span>
				</td>
			</tr>
			
			<tr>
	          <td>
	            <input type="text" name="email" placeholder = "E-mail" placeholder="Email" required>
					<span class="error">* <br></span>
	          </td>
	        </tr>
			
			<tr>
	          <td>
	            <input type="text" name="website" placeholder = "Website" required>
				<span class="error"> <br></span>
	          </td>
	        </tr>
			
			<tr>
	          <td>
	            <textarea name="comment" rows="5" cols="40"> </textarea>
	          </td>
	        </tr>
			
			<tr>
				<td>
					Gender: 
					<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
					<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
					<span class="error">* <br></span> 
				</td>
			</tr>
			
			<td>
	          <p><span class="error">* required field </span></p>
	          <button type="submit" name="submit" value="Submit"> SUBMIT </button>
	        </td>
	      </table> 
	</form>
	</center>
	</div>
	</body>
	</html>