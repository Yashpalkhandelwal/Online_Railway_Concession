<?php include('StudentHeader.php');

$val = !empty($_SESSION["sid_session"])?$_SESSION:" ";

if($val == " ")
{
	echo"<script>window.location.href='Login.php'</script>";
}
$sid_session = $_SESSION["sid_session"];



$sel="select name,age,address,collegename,class,contactno,emailid from student where sid='$sid_session'";
$rel=$con->query($sel);
$data = mysqli_fetch_assoc($rel);
$name = $data['name'];
$age = $data['age'];
$address = $data['address'];
$collegename = $data['collegename'];
$class = $data['class'];
$contactno = $data['contactno'];
$emailid = $data['emailid'];

?>
<head>
<style>	
		body
		{
			background: url('images/studreq1.jpg') no-repeat;
			background-size: cover;
		}
	</style>
</head>

<div class="content">		
<div class="container">
	<div class="row" style="margin-top:12%; margin-bottom: 30px;">
		<div class="col-lg-3">
		</div>

		<div class="col-lg-6" style=" margin-left: auto; margin-right: auto;">
			<div style="border: 1px solid #e7eced; background-color: #e7eced; border-radius: 20px" class="text-center">
				<div style="text-align: center;">				
					<img src="images/profile.png" class="img-fluid" style="width: 150px; height: 150px; margin-top: -76px;">
				</div>

				<div style="text-align: left; padding:15px;">	
				
				<form id="myform" method="post">
				
					<div class="form-group">
						<label for="">Name:</label>
						<input type="text" class="form-control" value="<?php echo $name ?>" readonly name="name"/>
					 </div>
					 
					 <div class="form-group">
						<label for="">Age:</label>
						<input type="text" class="form-control" value="<?php echo $age ?>" placeholder="Enter Age" name="age"/>
					  </div>
					  
					  <div class="form-group">
						<label for="">Contact Number:</label>
						<input type="number" class="form-control" value="<?php echo $contactno ?>" placeholder="Enter Contact Number" name="contactno"/>
					  </div>
					  
					  <div class="form-group">
						<label for="">College Name:</label>
						<input type="text" class="form-control" value="<?php echo $collegename ?>" placeholder="Enter College Name" name="colgname"/>
					  </div>
					  
					  <div class="form-group">
						<label for="">Address:</label>
						<textarea class="form-control" rows="3" name="address" placeholder="Enter Address"><?php echo $address ?></textarea>
					  </div>
					  <div class="form-group">
						<label for="">Class:</label>
						<input type="text" class="form-control" placeholder="Enter Class" name="classname" value="<?php echo $class ?>"/>
					  </div>
					  
					   <div class="form-group">
						<label for="">Email ID:</label>
						<input type="email" class="form-control" placeholder="Enter Email ID" name="emailid" value="<?php echo $emailid ?>"/>
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
</div>	


<?php 

if(isset($_POST['btn_submit']))
{	
	$age = $_POST['age'];	
	$contactno = $_POST['contactno'];
	$colgname = $_POST['colgname'];
	$address = $_POST['address'];
	$classname = $_POST['classname'];
	$emailid = $_POST['emailid'];
	
	
	$update = "Update student set age='$age',address='$address',collegename='$colgname',class='$classname',contactno='$contactno',emailid='$emailid' where sid='$sid_session'";													
	if(mysqli_query($con, $update))
	{
		echo "<script>alert('Record Updated succesfully');</script>";
		echo "<script>window.location.href='StudentProfile.php'</script>";
									
	}	
	else
	{
		echo "<script>alert('Invalid');</script>";
	}			
}


include('footer.php')
?>


<script>

$(function()
    {
            $("#myform").validate({
            
            rules:{
				age: "required",
				contactno: "required",
				colgname: "required",
				address: "required",
				classname: "required",
                emailid: {					             
				   required:true,
                   email:true			
                },							
           },

            messages:{
				age:"<h5 style='color:red;font-size: 15px;'><b>Please Enter Valid Age </b></h5>",
				contactno:"<h5 style='color:red;font-size: 15px;'><b>Please Enter Valid Contact Number</b></h5>",
				colgname:"<h5 style='color:red;font-size: 15px;'><b>Please Enter Valid College Name</b></h5>",
				address:"<h5 style='color:red;font-size: 15px;'><b>Please Enter Valid Address </b></h5>",
				classname:"<h5 style='color:red;font-size: 15px;'><b>Please Enter Valid Class</b></h5>",
				emailid:"<h5 style='color:red;font-size: 15px;'><b>Please Enter Valid Email ID </b></h5>",
								
            },

            submitHandler: function(form){
                form.submit();
            }

        });

    }); 
	

</script>
