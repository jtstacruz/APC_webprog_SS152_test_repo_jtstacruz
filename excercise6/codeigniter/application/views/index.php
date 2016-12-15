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
    <th colspan="5"><a href="<?php echo base_url('index.php/Users/add_form')?>">-Add data here-</a></th>
    </tr>
    <th>Name</th>
    <th>Email</th>
    <th>Website</th>
	<th>Comment</th>
	<th>Gender</th>
    <th colspan="2">Operations</th>
    </tr>
    
	<?php foreach ($user_list as $u_key){ ?>
       
	   <tr>
        <td><?php echo $u_key->name; ?></td>
        <td><?php echo $u_key->email; ?></td>
        <td><?php echo $u_key->website; ?></td>
        <td><?php echo $u_key->comment; ?></td>
        <td><?php echo $u_key->gender; ?></td>
  
		 <td align="center"><a href="<?php echo base_url() . "index.php/users/show_users_id/" . $u_key->user_id; ?>" onClick="show_confirm('edit',<?php echo $u_key->user_id;?>)"><img src="<?php echo base_url();?>/images/b_edit.png" style="width: 20px"></img></a></td>
        

        <td align="center"><a href="#" onClick="show_confirm('delete',<?php echo $u_key->user_id;?>)"><img src="<?php echo base_url();?>/images/b_drop.png"></img></a></td>
        
        </tr>

        <?php }?>
    </table>
  </div>
</div>

</center>
</body>
</html>
