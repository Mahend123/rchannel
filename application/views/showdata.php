<?php
if($res);
		

	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Retirement Channel</title>
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" media="all" />
   <!--  <script>
    $(document).ready(function(){
        
          $(".message").fadeOut(4000);
    });
    </script>    -->   

</head>
<body>

  <!-- <div>
<div class="message"><?php// echo $this->session->flashdata('message');?></div>
  </div> -->
   
   <h3 align="center" style="background-color: blue; color: white;">Confirm Your Registration Below</h3>
<div class="bordcls">
<div class="fmdv">

  <form  Method="POST" class="form-horizontal" action="<?php echo base_url('user/showinsert');?>" enctype="multipart/form-data" >
   <div class="form-group">
      <label class="control-label col-sm-3" for="fname">Full First Name:</label>
      <div class="col-sm-8">
      	<?php echo $res['fname']; ?>
        <input type="hidden" class="form-control"   name="fname" value="<?php echo $res['fname']; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="nname">Nickname:</label>
      <div class="col-sm-8">   
      <?php echo $res['nname']; ?>       
        <input type="hidden" class="form-control" id="nname" value="<?php echo $res['nname']; ?>" name="nname">
      </div>	
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="sname">Surname:</label>
      <div class="col-sm-8">
      <?php echo $res['sname']; ?>           
        <input type="hidden" class="form-control" id="sname" value="<?php echo $res['sname']; ?>" name="sname">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="company">Company Name:</label>
      <div class="col-sm-8">  
      <?php echo $res['company']; ?>         
        <input type="hidden" class="form-control" id="company" value="<?php echo $res['company']; ?>" name="company">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="office">Office City, State:</label>
      <div class="col-sm-8">  
      <?php echo $res['office']; ?>         
        <input type="hidden" class="form-control" id="office" value="<?php echo $res['office']; ?>" name="office">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="email">Work Email:</label>
      <div class="col-sm-8">  
      <?php echo $res['email']; ?>         
        <input type="hidden" class="form-control" id="email" value="<?php echo $res['email']; ?>" name="email">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="phone">Work Phone:</label>
      <div class="col-sm-8">  
      <?php echo $res['phone']; ?>         
        <input type="hidden" class="form-control" id="phone" value="<?php echo $res['phone']; ?>" name="phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="username">Username:</label>
      <div class="col-sm-8">  
      <?php echo $res['username']; ?>         
        <input type="hidden" class="form-control" id="username" value="<?php echo $res['username']; ?>" name="username">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd">Password:</label>
      <div class="col-sm-8">  
      <?php echo $res['pwd']; ?>         
        <input type="hidden" class="form-control" id="pwd" value="<?php echo $res['pwd']; ?>" name="pwd">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="rpwd">Re-Enter Password:</label>
      <div class="col-sm-8">  
      <?php echo $res['rpwd']; ?>         
        <input type="hidden" class="form-control" id="rpwd" value="<?php echo $res['rpwd']; ?>" name="rpwd">
      </div>
    </div>
	
   
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-8">
        <input class="btn btn-info" type='submit' name='submit' value='Submit'>
        <a class="btn btn-primary" href="<?php echo base_url(); ?>user/financial">Cancel</a>	
      </div>
    </div>
  </form>
	</div>	
 </div> 
</body>
</html>