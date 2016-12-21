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
      table{
          background-color: #FCECE8;
          box-shadow: 1px 2px 20px #272532;
          border-radius: 5px;
          font-family: coolvetica;
          font-size: 20px;
          width:80%;
          color:#6F5F5C;
          margin-top:30px;
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
       font-family: coolvetica;
       box-shadow:0px 0px 0px rgba(1,0,0,0.2);
       outline:none;
      }
      #add_data:hover{
          background-color: #d6cfc4;
     }
   }

</style>
</head>
<body>
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
      <a href="Users/add_form">PHP Form</a>
    </center>

  </body>
  </center>
  </div>

  <br>
  <br>



 <div id="table">
    <table align="center">
    <tr>
    <th colspan="5"><a href="<?php echo base_url('index.php/Users/add_form')?>">-Fill up form here-</a></th>
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
  
		 <td align="center"><a href="<?php echo base_url() . "index.php/users/show_users_id/" . $u_key->user_id; ?>" onClick="show_confirm('edit',<?php echo $u_key->user_id;?>)"><img src="<?php echo base_url();?>/images/b_edit.png" style="width: 30px"></img></a></td>
        

        <td align="center"><a href="#" onClick="show_confirm('delete',<?php echo $u_key->user_id;?>)"><img src="<?php echo base_url();?>/images/b_drop.png"></img></a></td>
        
        </tr>

        <?php }?>
    </table>
  </div>
</div>

</center>
</body>
</html>
