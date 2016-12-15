
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

 <?php foreach ($single_users as $users): ?>
    <form method="post" action="<?php echo base_url() . "index.php/users/update_users_id1"?>">
    <table align="center">
	<td><a href = "index.php"> Back to Main Page </a></td>
        

<tr>
	<td>
	<input type="text" name="name" placeholder="Name" value="<?php echo $users->name; ?>" required />
    <span class="error">* <br></span>
	</td>
</tr>

<tr>
    <td>
	<input type="text" name="email" placeholder="Email" value="<?php echo $users->email; ?>" required />
    <span class="error">* <br></span>
</tr>
    
<tr>
    <td>
	<input type="text" name="website" placeholder="Comment" value="<?php echo $users->website; ?>" required />
	<span class="error">* <br></span>
	</td>
</tr>
	
<tr>
    <td>
	<input type="text" name="comment" placeholder="Website" value="<?php echo $users->comment; ?>" required />
	</td>
</tr>
	
</tr>
          <td>
            Gender:
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female"> Female
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male"> Male 
            <span class="error">* <br></span>
          </td>
        </tr>
    
	<tr>
    <td>
	<p><span class="error">* required field </span></p>
   <input type = "submit" name = "submit" value="Update"></td>
    </td>
    </tr>
    </table>
    </form>
  <?php endforeach; ?>
    </div>
</div>

</center>
</body>
</html>