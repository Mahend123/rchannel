

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Retirement Channel</title>
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.validate.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" media="all" />
   <script>
    $(document).ready(function(){
        $("#frm").validate({
            rules:{
                fname:{required:true},       
                 sname:{required:true},
                 company:{required:true},
                 office:{required:true},
                 
                 email:{required:true,email:true}, 
                 username:{required:true},
                 pwd:{required:true},
                 rpwd:{required:true,equalTo:"#pwd"},       
                 phone:{required:true,minlength:10,maxlength:10,digits:true},
                    
               },
               messages:{
                fname:{required:"<span style='color:red;'>Please enter your first name </span>"},       
                 sname:{required:"<span style='color:red;'>Please enter your surname name</span>"},
                
                 company:{required:"<span style='color:red;'>Please enter your company</span>"},
                 office:{required:"<span style='color:red;'>Please enter your Office City, State</span>"},
                
                 email:{required:"<span style='color:red;'>Please enter work email_id</span>",email:"<span style='color:blue;'>Enter valid Email_Id</span>"},  
                 // phone:{required:"<span style='color:red;'>Please enter 10 digits mobile number</span>",digits:"<span style='color:blue;'>Invalid mobile number</span>"},     
                  username:{required:"<span style='color:red;'>Please enter your username name</span>"},
                 pwd:{required:"<span style='color:red;'>Please enter your password</span>"},
                 rpwd:{required:"<span style='color:red;'>comfirm password required</span>",equalTo:"<span style='color:blue;'>Password does not matched</span>"},       
                 phone:{required:"<span style='color:red;'>Please enter 10 digits mobile number</span>",digits:"<span style='color:blue;'>Invalid Contact</span>"},
               }
        });
        $(".message").fadeOut(4500);
    });
    </script> 

</head>
<body>
 <?php
if(isset ($message))
{

?>
<div style="margin-top: 3%;" align="center" class="message"><?php echo $message; ?></div>
    


<?php
}
?>
  
  <!-- <div class="message"><?php //echo $this->session->flashdata('message');?></div> -->
<div style="margin-top: 2%; margin-left: 85%;">
    <a class="btn btn-primary" href="<?php echo base_url()?>user/selectuser">Back</a> 
    </div>
 
   <h3 align="center">Licensed Financial Advisor</h3>
<div class="bordcls">
<div class="fmdv">

  <form  Method="POST" id="frm" class="form-horizontal" action="<?php echo base_url('user/show');?>" enctype="multipart/form-data" >
   <div class="form-group">
      <label class="control-label col-sm-3" for="fname">Full First Name:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="nname">Nickname:</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control" id="nname" placeholder="Enter Nickname" name="nname">
      </div>	
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="sname">Surname:</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control" id="sname" placeholder="Enter Surname" name="sname">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="company">Company Name:</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control" id="company" placeholder="Enter Company Name" name="company">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="office">Office City, State:</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control" id="office" placeholder="Enter Office City, State" name="office">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="email">Work Email:</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control" id="email" placeholder="Enter Work Email" name="email">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="phone">Work Phone:</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control" id="phone" placeholder="Enter Work Phone" name="phone">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="username">Username:</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd">Password:</label>
      <div class="col-sm-8">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pwd">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="rpwd">Re-Enter Password:</label>
      <div class="col-sm-8">          
        <input type="password" class="form-control" id="rpwd" placeholder="Enter Re-Enter Password" name="rpwd">
      </div>
    </div>

   
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-8">
        <input class="btn btn-info" type='submit' name='submit' value='Submit'>
      </div>
    </div>
  </form>
	</div>	
 </div> 
</body>
</html>