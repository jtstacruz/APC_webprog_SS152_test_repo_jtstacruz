<?php
include_once 'dbconfig.php';

$Error = $nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";


if(isset($_POST['submit'])){
  
    $name = test_input($_POST["name"]);
    
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
	  $Error = "Error";
    }
  
  

    $email = test_input($_POST["email"]);
   
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
	  $Error = "Error";
    }
  
    
    $website = test_input($_POST["website"]);
    
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
	  $Error = "Error";
    }
  

  
    if (empty($_POST["comment"])) {    
      $comment = "";    
    } else {    
      $comment = test_input($_POST["comment"]);   
    }
  

    if (empty($_POST["gender"])) {   
      $genderErr = "Input gender";  
      $Error = "Error";    
    } else {    
      $gender = test_input($_POST["gender"]);   
    }

 // sql query for inserting data into database
	if ($Error != "Error"){
        $sql_query = "INSERT INTO users(name,email,website,comment,gender) VALUES('$name','$email','$website','$comment','$gender')";
		mysql_query($sql_query);
	}
        
        // sql query for inserting data into database
 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>





<!DOCTYPE html>
<html>
<head>
<script language="javascript" type="text/javascript">
alert("Welcome to Jhenina's Amazing Website!")

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
		.box1{
  			position: absolute;
 			 left: 30%;
  			margin-top: 20px;
  			background-color: #EEE7DA;
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
				.form {
		  padding-left: 90px;
		  padding-right: 60px;
		  color: #5B5552;
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
		  line-height: 0.5em
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
		<div class="city">
		<br>


<div>
<h2>Fill up the form!</h2>
<p><span class="error">* required field.</span></p>
<form method="post">  
	<table align= "center">
		<tr align = "center">
			<td><a href = "index.php"> Back to Main Page </a></td>
		</tr>
		
		
	
		<tr>
			<td>
				<input type="text" name="name" placeholder = "Name" value="<?php echo $name;?>">
				<span class="error">* <?php echo $nameErr;?></span>
			</td>
		</tr>
		
		<tr>
          <td>
            <input type="text" name="email" placeholder = "E-mail" value="<?php echo $email;?>">
				<span class="error">* <?php echo $emailErr;?></span>
          </td>
        </tr>
		
		<tr>
          <td>
            <input type="text" name="website" placeholder = "Website" value="<?php echo $website;?>">
			<span class="error"><?php echo $websiteErr;?></span>
          </td>
        </tr>
		
		<tr>
          <td>
            <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
          </td>
        </tr>
		
		<tr>
			<td>
				Gender: 
				<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
				<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
				<span class="error">* <?php echo $genderErr;?></span> 
			</td>
		</tr>
		
		<td>
          <p><span class="error">* required field </span></p>
          <button type="submit" name="submit" value="Submit"> SUBMIT </button>
        </td>
      </table> 
</form>
</div>

<br>
<?php
echo "<h2>Your Input:</h2><br>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</center>
</body>
</html>