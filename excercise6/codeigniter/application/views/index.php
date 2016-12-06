<!DOCTYPE html>
<html>
<head>

<title> Form Validation  </title>

<script type="text/javascript">

function show_confirm(act, gotoid){

  if(act == "edit"){
        var r = confirm("Do you really want to edit?")
    }
    else{
        var r = confirm("Do you really want to delete?")
    }
    if(r == true){
        window.location="<?php echo base_url();?>index.php/users/"+act+"/"+gotoid;
 }
}
</script>
<style>

body{

  background-image: url("gray.gif");
  opacity: 1.5;
}
table{
    background-color: #EEE7DA;
    box-shadow: 1px 1px 20px #272532;
    border-radius: 5px;
    font-family: helvetica;
    width:90%;
    color:#6F5F5C;
    margin-bottom:80px;
}
table a{
 text-decoration:none;
 color:#5B5552;
}
table,td,th{
 border-collapse:collapse;
 border:solid #d0d0d0 1px;
 padding:20px;
}
table td input{
 width:97%;
 height:35px;
 border:dashed #00a2d1 1px;
 padding-left:15px;
 font-family:Verdana, Geneva, sans-serif;
 box-shadow:0px 0px 0px rgba(1,0,0,0.2);
 outline:none;
}
#add_data:hover{
    background-color: #d6cfc4;
}
</style>
</head>
<body>
<center>

<div id="header">
 <div id="content">
    
    </div>
</div>

<div id="body">
 <div id="content">
    <table align="center">
    <tr>
    <th colspan="5"><a href="form.php">-Add data here-</a></th>
    </tr>
    <th>Name</th>
    <th>Email</th>
    <th>Website</th>
	<th>Comment</th>
	<th>Gender</th>
    <th colspan="2">Operations</th>
    </tr>
    <?php
 $sql_query="SELECT * FROM users";
 $result_set=mysql_query($sql_query);
 while($row=mysql_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
        <td><?php echo $row[5]; ?></td>
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>

</center>
</body>
</html>