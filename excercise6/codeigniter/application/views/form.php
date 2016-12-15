<!DOCTYPE html>
<html>
<head>
<script language="javascript" type="text/javascript">
alert("Welcome to Jhenina's Amazing Website!")
<title> Form </title>
</script>

</head>   

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
			<a href="<?php echo base_url('index.php/MyTrivias/index')?>"> Trivias</a>
			<a href="form.php">PHP Form</a>
		</center>
	<br>
	<br>
	
		<center>
		<div class="city">
		<br>


<div class= "form">
<h2>Form Validation </h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo base_url();?>index.php/users/insert_user_db">  
	<table align= "center">
		<tr align = "center">
			<td>
			<a href = "index.php"> Back to Main Page </a></td>
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
</div>
</body>
</html>