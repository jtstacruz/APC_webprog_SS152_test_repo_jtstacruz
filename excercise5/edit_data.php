<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}


$Error = $nameErr = $emailErr = $genderErr = $websiteErr = "";

if(isset($_POST['btn-update'])){
  
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
 
 // variables for input data
	 if($Error != "Error"){
		$sql_query = "UPDATE users SET name='$name',email='$email',website='$website',comment='$comment',gender='$gender' WHERE user_id=".$_GET['edit_id'];
	 }
 // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql_query) && $Error != "Error") {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='index.php';
  </script>
  <?php
 }
 else{
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
}


if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
}
	
	
	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
	}
?>
<!DOCTYPE html PUBLIC>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Cleartuts</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<style>

body{
  background-image: url("gray.gif");
  opacity: 1.5;
}
.box{
  position: absolute;
  left: 30%;
  margin-top: 20px;
  background-color: #EEE7DA;
  
  border-radius: 5px;
  font-family: helvetica;
  width: 500px;
  height: 600px;
}
.error {color: #FF0000;}
h2{
  text-align: center;
}
textarea{
  width: 200px;
  height: 50px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-position: 10px 10px;
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
}
p, form{
  padding-left: 50px;
  padding-right: 60px;
  color: #5B5552;
}
#formValid{
  color: #5B5552;
}
input{
  margin-left: 25px;
}
#submit{
  position: absolute;
  margin-left: 210px;
}
input[type=text], select {
  width: 200px;
  height: 35px;
  padding: 12px 15px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
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
</style>
<body>
<center>

<div id="header">
 <div id="content">
    <label>Jhenina's Form Inputs</label>
    </div>
</div>

<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
	<td><a href = "index.php"> Back to Main Page </a></td>
        

<tr>
	<td>
	<input type="text" name="name" placeholder="Name" value="<?php echo $fetched_row['name']; ?>" required />
    <span class="error">* <br><?php echo $nameErr;?></span>
	</td>
</tr>

<tr>
    <td>
	<input type="text" name="email" placeholder="Email" value="<?php echo $fetched_row['email']; ?>" required />
    <span class="error">* <br><?php echo $emailErr;?></span>
</tr>
    
<tr>
    <td>
	<input type="text" name="website" placeholder="Comment" value="<?php echo $fetched_row['website']; ?>" required />
	<span class="error">* <br><?php echo $websiteErr;?></span>
	</td>
</tr>
	
<tr>
    <td>
	<input type="text" name="comment" placeholder="Website" value="<?php echo $fetched_row['comment']; ?>" required />
	</td>
</tr>
	
</tr>
          <td>
            Gender:
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female"> Female
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male"> Male 
            <span class="error">* <br><?php echo $genderErr;?></span>
          </td>
        </tr>
    
	<tr>
    <td>
	<p><span class="error">* required field </span></p>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>