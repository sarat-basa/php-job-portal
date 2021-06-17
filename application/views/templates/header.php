<!DOCTYPE html>
<html>
    <head>
	  	<meta charset="utf-8">
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	  	<title>Job Portal</title>

	  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	   	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
 		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

	   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">

	   	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
 		<script type="text/javascript" src="./service/config.js"></script>
	   	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	   	
	   	

	   	 
		<style>
			body {
				background: #818f97;
				font-family: Arial, Helvetica, sans-serif;
			}

			.navbar {
			  width: 100%;
			  background-color: #4569af;
			  height: 55px;
			}

			.navbar .left {
			  float: left;
			  padding: 15px;
			  text-decoration: none;
			  font-size: 18px;
			}
			.navbar .right {
			  float: right;
			  padding: 15px;
			  text-decoration: none;
			  font-size: 18px;
			}

			.navbar a:hover {
			  background-color: #4569af;
			  text-decoration: none;
			}
			
			.login-box {
			    margin-top: 75px;
			    height: auto;
			    background: #163b4d;
			    text-align: center;
			    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
			}
			.login-title {
			    margin-top: 15px;
			    text-align: center;
			    font-size: 30px;
			    letter-spacing: 2px;
			    margin-top: 15px;
			    font-weight: bold;
			    color: #ECF0F5;
			}

			.login-form {
			    margin-top: 25px;
			    text-align: left;
			}
			.form-group {
			    margin-bottom: 40px;
			    outline: 0px;
			}


			label {
			    margin-bottom: 0px;
			}

			.form-control-label {
			    font-size: 15px;
			    color: white;
			    font-weight: bold;
			    letter-spacing: 2px;
			    text-transform: capitalize;
			}

			
			.login-btm {
			    float: left;
			}

			.login-button {
			    padding-right: 0px;
			    float: left;
			    margin-bottom: 25px;
			}

			.login-text {
			    text-align: left;
			    padding-left: 0px;
			    color: #A2A4A4;
			}

			.loginbttm {
			    padding: 2px;
			}
			.fa{
				color: white;
			}
			.mt{
				margin-top: 10px;
			}
		</style>
	</head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
		   	<div class="left">
		   		<a href="./" style="color: white;">Job Portal</a>
		   	</div>
		   	<div class="right">
		   		<a href="jobseeker" style="color: white;"><i class="fa fa-fw fa-user"></i> Job seeker</a>
		   		<a href="recruiter" style="color: white;"><i class="fa fa-fw fa-user"></i> Recruiter</a>
		   	</div>
		</div>
  			