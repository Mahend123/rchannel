<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Retirement Channel</title>
	
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" media="all" />


</head>
<body>
	<div class="maindiv">
	<div class="container">
  		<h2>Retirement Channel</h2>

	</div>
	<div class="logbtn"><a href="<?php echo base_url()?>user/selectuser">Log in or Register</a></div>
	
	<!-- <div class="btn btn-primary"  style=" margin-left: 85%;"><a style="color: white;" href="<?php //echo base_url()?>logout">Log-Out</a></div> -->
	
	<div>
		<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
		  <ul class="navbar-nav">
		    <li class="nav-item active">
		      <a class="nav-link" href="#">Home</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="#">MyDashboard</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="#">Webcasts</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link disabled" href="#">Fund Research</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link disabled" href="#">Plan Research</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link disabled" href="#">Singficant Digits</a>
		    </li>

		    <li class="nav-item">
		      <a class="" style="padding-left: 340px; " href="<?php echo base_url()?>logout">Log-Out</a>
		    </li>
		  </ul>
		</nav>
	</div>	
	<div class="row">
		<div class="col-sm-4">
			<p class="txt1">Upcoming Webcasts</p>
			<div class="box1"></div>
		</div>
		<div class="col-sm-4">
			<p class="txt1">On Demand Webcasts</p>
			<div class="box1"></div>
		</div>
		<div class="col-sm-4">
			<p class="txt1">Latest Significant Digit</p>
			<div class="box1"></div>
		</div>
	</div>	




</div>
</body>
</html>


