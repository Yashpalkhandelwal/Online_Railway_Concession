<?php session_start();
include("connection.php");
if(isset($_GET['login']))
{
?>
<!DOCTYPE html>
<html>
<head>
    <title>Online Railway Concession</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	
	<style>	
		body
		{
			background: url('images/login1.jpg') no-repeat;
			background-size: cover;
		}	
	</style>
		  
</head>
<body>

	<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 p-4 p-md-5 order-md-last bg-transparentk">
		  <form id="myform" method="post">


				<?php
				if($_GET['login'] == "admin")
				{
				?>
					<br><br><br><br><br><center><font color="black" size="20">Admin Login</font></center>
				<?php	
				}
				else
				{
				?>
					<br><br><br><br><br><center><font color="black" size="20">Student Login</font></center>
				<?php
				}
				?>
				
				
		
				
				
				<?php
				if($_GET['login'] == "admin")
				{
				?>
					<div class="form-group">
                <input type="text" class="form-control" name="email" id="inputEmail" placeholder="Enter Admin ID" />
				<?php	
				}
				else
				{
				?>
              <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Enter Email" />
				<?php
				}
				?>	
			<br>
				
				<div class="form-group">
				<input type="password" class="form-control" name="pswd" placeholder="Enter Password" />
				</div>
				
				<div class="form-group">
					<input type="submit" class="lgnbtn" name="btn_login" value="Login" />
				</div>
				
				<center style="color: blue; font-weight: bold;"><a href="index.html"> <i class="fa fa-arrow-left"></i> <---- Back To Home</a></center>
				<br/>
				
		   </form>
		   
		   </div>
					
				</div>
			</div>
		</section>
				
	

	

<?php

if(isset($_POST['btn_login']))
{	
    $email = $_POST['email'];	
    $pswd = $_POST['pswd'];
	
	if($email == "admin" && $pswd == "admin")
	{
		$sel = "select adminid from admin where adminid='$email' and password='$pswd'";
		$rel=$con->query($sel);	
		
		if($data=mysqli_fetch_array($rel))
		{
			$adminid = $data['adminid'];
			
			$_SESSION["adminid_session"] = $adminid;
		
			echo "<script>window.location.href='AddStudent.php'</script>";							
		}
		else
		{
			echo "<script>alert('Invalid Login');</script>";
		}
	}
	else
	{		
		$sel = "select sid,name from student where emailid='$email' and password='$pswd'";
		$rel=$con->query($sel);			   
		if($data=mysqli_fetch_array($rel))
		{
			$sid = $data['sid'];
			$studentname = $data['name'];		
			
			$_SESSION["sid_session"] = $sid;
			$_SESSION["studentname_session"] = $studentname;
						
			echo "<script>window.location.href='StudentRequest.php'</script>";
							
		}
		else
		{
			echo "<script>alert('Invalid Login');</script>";
		}
	}	
			
}

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/jquery.validate.min.js"></script>

<script>

    $(function()
    {
            $("#myform").validate({
            
            rules:{
                email: {
					<?php
				if($_GET['login'] == "admin")
				{
				?>
                    required:true
				<?php	
				}
				else
				{
				?>	
				   required:true,
                   email:true
				<?php
				}
				?> 
				
                },			
                pswd : "required",
				
           },

            messages:{
				<?php
				if($_GET['login'] == "admin")
				{
				?>
					email:"<h5 style='color:red;font-size: 15px;'><b>Please Enter Valid Admin ID</b></h5>",
				<?php	
				}
				else
				{
				?>
					email:"<h5 style='color:red;font-size: 15px;'><b>Please Enter Valid Email</b></h5>",
				<?php
				}
				?>
				
                pswd:"<h5 style='color:red;font-size: 15px;'><b>Please Enter Valid Password</b></h5>",
                							
            },

            submitHandler: function(form){
                form.submit();
            }

        });

    }); 
	
</script>


<?php
}
else
{
	echo "<script>window.location.href = 'index.html';</script>";
}
?>

</body>
</html>