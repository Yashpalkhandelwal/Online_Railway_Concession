<?php include('AdminHeader.php');

$val = !empty($_SESSION["adminid_session"])?$_SESSION:" ";

if($val == " ")
{
	echo"<script>window.location.href='Login.php'</script>";
}
$adminid_session = $_SESSION["adminid_session"];
?>

    

	<style>	
		body
		{
			background: url('images/addstud.jpg') no-repeat;
			background-size: cover;
		}
		
		.btn.btn-primary {
    background: #fd5f00;
    border: 1px solid #fd5f00;
    color: #fff; }
    .btn.btn-primary:hover {
      border: 1px solid #fd5f00;
      background: transparent;
      color: #fd5f00; }
    .btn.btn-primary.btn-outline-primary {
      border: 1px solid #fd5f00;
      background: transparent;
      color: #fd5f00; }
      .btn.btn-primary.btn-outline-primary:hover {
        border: 1px solid transparent;
        background: #fd5f00;
        color: #fff; }
		
		row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px; }

.no-gutters {
  margin-right: 0;
  margin-left: 0; }
  .no-gutters > .col,
  .no-gutters > [class*="col-"] {
    padding-right: 0;
    padding-left: 0; }

.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
.col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
.col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
.col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
.col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
.col-xl-auto {
  position: relative;
  width: 100%;
  padding-right: 15px;
  padding-left: 15px; }

.col {
  -ms-flex-preferred-size: 0;
  flex-basis: 0;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  max-width: 100%; }

.col-auto {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: auto;
  max-width: 100%; }

.col-1 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 8.33333%;
  flex: 0 0 8.33333%;
  max-width: 8.33333%; }

.col-2 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 16.66667%;
  flex: 0 0 16.66667%;
  max-width: 16.66667%; }

.col-3 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 25%;
  flex: 0 0 25%;
  max-width: 25%; }

.col-4 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 33.33333%;
  flex: 0 0 33.33333%;
  max-width: 33.33333%; }

.col-5 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 41.66667%;
  flex: 0 0 41.66667%;
  max-width: 41.66667%; }

.col-6 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 50%;
  flex: 0 0 50%;
  max-width: 50%; }

.col-7 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 58.33333%;
  flex: 0 0 58.33333%;
  max-width: 58.33333%; }

.col-8 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 66.66667%;
  flex: 0 0 66.66667%;
  max-width: 66.66667%; }

.col-9 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 75%;
  flex: 0 0 75%;
  max-width: 75%; }

.col-10 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 83.33333%;
  flex: 0 0 83.33333%;
  max-width: 83.33333%; }

.col-11 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 91.66667%;
  flex: 0 0 91.66667%;
  max-width: 91.66667%; }

.col-12 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 100%;
  flex: 0 0 100%;
  max-width: 100%; }

	</style>
<div class="content">
	<div class="container">
	
	<div class="row">
	<div class="col-md-6 col-lg-6">
		<div id="searchbox">
		 <form method="post">
			<div class="input-group" style="margin-top:13%;">
				<input name="search_name" type="text" class="form-control" placeholder="Search Student Name">
				<div class="input-group-btn">
					<button class="btn btn-primary py-4 px-4" name="btn_search" type="submit" >Search
					
					</button>
				</div>
			</div>	
		  </form>	
		</div>		
	</div>
	
		<div class="col-md-6 col-lg-6 text-right" style="margin-top:5%;">
			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Student</button>
		</div>		
	</div>
	
		
		<div class="col-md-12">
			<!-- Modal -->
			<div id="myModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
				
				<form id="myform" method="post">
				
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add Student</h4>
				  </div>
				  
				  <div class="modal-body">
					
					  <div class="form-group">
						<label for="">Name:</label>
						<input type="text" class="form-control" placeholder="Enter Name" name="name" required />
					  </div>
					  
					  <div class="form-group">
						<label for="">Age:</label>
						<input type="text" class="form-control" placeholder="Enter Age" name="age" required />
					  </div>
					  					 
					  <div class="form-group">
						<label for="">Contact Number:</label>
						<input type="number" class="form-control" placeholder="Enter Contact Number" name="contactno" required />
					  </div>
					  
					  <div class="form-group">
						<label for="">College Name:</label>
						<input type="text" class="form-control" placeholder="Enter College Name" name="colgname" required />
					  </div>
					  
					  <div class="form-group">
						<label for="">Address:</label>
						<textarea class="form-control" rows="3" name="address" placeholder="Enter Address" required></textarea>
					  </div>
					  <div class="form-group">
						<label for="">Class:</label>
						<input type="text" class="form-control" placeholder="Enter Class" name="classname" required />
					  </div>
					  
					   <div class="form-group">
						<label for="">Email ID:</label>
						<input type="email" class="form-control" placeholder="Enter Email ID" name="emailid" required />
					  </div>
					  
					  <!--<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" class="form-control" placeholder="Enter Password" name="pswd"/>
					  </div>-->
					
				  </div>
				  
				  <div class="modal-footer">
					<input type="submit" class="btn btn-primary" name="btn_submit" value="Submit" />
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				  </div>
				  
				  </form>
				  
				</div>

			  </div>
			</div>
		</div>
	
		
		
		  
		  
		
		
	
		
<?php 

if(isset($_POST['btn_submit']))
{	
    $name = $_POST['name'];
	$age = $_POST['age'];	
	$contactno = $_POST['contactno'];
	$colgname = $_POST['colgname'];
	$address = $_POST['address'];
	$classname = $_POST['classname'];
	$emailid = $_POST['emailid'];
	//$pswd = $_POST['pswd'];
	
	$var="select max(sid) as sid from student";
	$res_var=$con->query($var);
	$row = mysqli_fetch_assoc($res_var);
	$sid_row = $row['sid'];	
	if(!empty($sid_row))
	{				
		$sid = $sid_row + 1;								
	}
	else
	{		
		$sid = '1001';						
	}
	
	function randomString($length = 6) {
	$str = "";
	$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
	$max = count($characters) - 1;
	for ($i = 0; $i < $length; $i++) {
		$rand = mt_rand(0, $max);
		$str .= $characters[$rand];
	}
	return $str;
    }
	
	$pass=randomString();
	
		
            
	$ins = "Insert into student(sid,name,age,address,collegename,class,contactno,emailid,password) values('$sid','$name','$age','$address','$colgname','$classname','$contactno','$emailid','$pass')";	
  
    
	if(mysqli_query($con, $ins))
	{
		echo "<script>alert('Student Added succesfully');</script>";
		echo "<script>window.location.href='AddStudent.php'</script>";
									
	}	
	else
	{
		echo "<script>alert('Invalid');</script>";
	}			
}

?>

<table class="table table-bordered" bgcolor="black">
		  
			
				<div class="row d-flex align-items-stretch no-gutters">
			<div class="col-md-12 p-4 p-md-5 order-md-last bg-dark" style="margin-top:2%;">
			<?php
			
			$search_name="";

			if(isset($_POST['btn_search']))
			{
				$search_name = $_POST['search_name'];
			}
			else
			{
			   $search_name = "";		   
			}
				
			if($search_name == "")
			{
				$sel = "select name,age,address,collegename,class,contactno,emailid,password from student";
			}
			else
			{

				$sel = "select name,age,address,collegename,class,contactno,emailid,password from student where name like '%$search_name%'";
			}
			
			$rel=$con->query($sel);
			if(mysqli_num_rows($rel)==0)
			{			  
				echo "<center><h3<br><br>No records to display</h3></center>";
				echo "<script>document.getElementById('searchbox').style.display='none'</script>";
			}
			else
			{
				echo "<script>document.getElementById('searchbox').style.display='block'</script>";	
				echo'<thead style="background-color:grey;color:white">           
				<tr>                  						
				<th bgcolor="black">Student Name</th>
				<th bgcolor="black">Age</th>
				<th bgcolor="black">Contact Number</th>
				<th bgcolor="black">Email ID</th>
				<th bgcolor="black">Address</th>
				<th bgcolor="black">College Name</th>
				<th bgcolor="black">Class</th>				
				<th bgcolor="black">Password</th>				
							
				</tr>
				</thead>

				<tbody>';
					  
				while($data=mysqli_fetch_array($rel))
				{		
					$name=$data['name'];
					$age=$data['age'];
					$address=$data['address'];							
					$collegename=$data['collegename'];
					$class=$data['class'];
					$contactno=$data['contactno'];
					$emailid=$data['emailid'];
					$pass=$data['password'];
                    
					
					
					echo'<td bgcolor="white">'.$name.'</td>
					<td bgcolor="white">'.$age.'</td>
					<td bgcolor="white">'.$contactno.'</td>
					<td bgcolor="white">'.$emailid.'</td>
					<td bgcolor="white">'.$address.'</td>
					<td bgcolor="white">'.$collegename.'</td>
					<td bgcolor="white">'.$class.'</td>	
					<td bgcolor="white">'.$pass.'</td>	
					
					</tr>';
					
				}
				echo'</tbody>';
			}		
					

			?>
		</div>
		</div>
					 			
		  </table>



<?php
include('footer.php')

    
			?>
<script>

$(function()
    {
            $("#myform").validate({
            
            rules:{
				name : "required",
				age: "required",
				contactno: "required",
				colgname: "required",
				address: "required",
				classname: "required",
               		
               
           },

            messages:{				
				name:"<h5 style='color:red;font-size: 15px;'><b>Please Enter Valid Name </b></h5>",
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
