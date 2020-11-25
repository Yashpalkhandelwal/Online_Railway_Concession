<?php include('StudentHeader.php');

$val = !empty($_SESSION["sid_session"])?$_SESSION:" ";

if($val == " ")
{
	echo"<script>window.location.href='Login.php'</script>";
}
$sid_session = $_SESSION["sid_session"];
?>
<style>	
		body
		{
			background: url('images/studreq1.jpg') no-repeat;
			background-size: cover;
		}
		</style>

<div class="content">		
<div class="container">
	<div class="row" style="margin-top:5%; margin-bottom: 30px;">
		<div class="col-lg-3">
		</div>

		<div class="col-lg-6" style="margin: 0 auto; padding: 20px; box-shadow: 0 4px 10px 0 rgba(0,0,0,0.2), 0 4px 20px 0 rgba(0,0,0,0.19);">
		
			<div style="text-align: left; padding:15px;">	
				
				<form id="myform" method="post">
				
					<div class="form-group">
						<label for="">Old Password:</label>
						<input type="password" class="form-control" placeholder="Enter Old Password" name="oldpass"/>
					 </div>
					 
					 <div class="form-group">
						<label for="">New Password:</label>
						<input type="password" class="form-control" placeholder="Enter New Password" name="newpass">
					  </div>
					  
					  <div class="form-group">
						<label for="pwd">Confirm Password:</label>
						<input type="password" class="form-control" placeholder="Enter Confirm Password" name="confpass">
					  </div>
				  
					  <div style="text-align:center">
						<input type="submit" class="btn btn-primary" name="btn_submit" value="Submit" />
					  </div>
					 
					</form>
					
				</div>				
			</div>
		</div>
		
		<div class="col-lg-3">
		</div>
	</div>	

  </div>

<?php 

if(isset($_POST['btn_submit']))
{	
    $oldpass = $_POST['oldpass'];
	$newpass = $_POST['newpass'];	
	$confpass = $_POST['confpass'];	
	
	$sel="select password from student where sid='$sid_session'";
	$rel=$con->query($sel);
	$data = mysqli_fetch_assoc($rel);
	$password = $data['password'];
	
	if($oldpass != $password)
	{
		echo "<script>alert('Old Password is not valid');</script>";
	}
	else if($confpass != $newpass)
	{
		echo "<script>alert('Password does not match');</script>";
	}
	else
	{
		$update = "Update student set password='$newpass' where sid='$sid_session'";	
		if(mysqli_query($con, $update))
		{
			echo "<script>alert('Password changed successfully');</script>";
			echo "<script>window.location.href='ChangePassword.php';</script>";
		}
		else
		{
			echo "<script>alert('Invalid');</script>";
		}
	}
					
}

include('footer.php')?>

		
<script>

$(function()
    {
		$.validator.addMethod("value1", function(value, element, arg){
			  return arg !== value;
		});
		
            $("#myform").validate({
            
            rules:{
				oldpass : "required",
				newpass: "required",
				confpass: "required",			
           },

            messages:{				
				oldpass:"<h5 style='color:red;font-size: 15px;'><b>Please Enter Valid Old Password</b></h5>",
				newpass:"<h5 style='color:red;font-size: 15px;'><b>Please Enter Valid New Password</b></h5>",
				confpass:"<h5 style='color:red;font-size: 15px;'><b>Please Enter Valid Confirm Password</b></h5>",									
            },		
            submitHandler: function(form){
                form.submit();
            }

        });

    }); 
	

	

</script>			

</body>
</html>