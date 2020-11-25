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
		

	</style>

<div class="content">
		
	<div class="container">
	<div style="margin-top:5%">
	<div class="input-group-btn">
					<button class="btn btn-primary py-4 px-4" name="btn_search" type="submit" >Student Name: <?php echo $_SESSION["studentname_session"]?>
					
					</button>
				</div>
	<h4></h4>
	</br>	
	</div>
	
		<div class=" text-right">
			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Request</button>
		</div>		
	
			
		<div class="col-md-12">
			<!-- Modal -->
			<div id="myModal" class="modal fade" role="dialog">    
			
			  <div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
				
				<form method="post" id="myform">
				
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Pass Details</h4>
				  </div>
				  
				  <div class="modal-body" >
				
					<h5>Student Name: <span style="color:maroon; font-size:16px;"><?php
					echo $_SESSION["studentname_session"]?></span></h5></br>
					
					  <div class="form-group" >
						<label>Source:</label>
						
						<select name="source" id="myform" required>
						<option  id="123from" value="123from">From</option>
						<option id="Churchgate Station"value="Churchgate Station">Churchgate Station</option>
						<option id="Marine Lines"value="Marine Lines">Marine Lines</option>
						<option id="Charni Road Station"value="Charni Road Station">Charni Road Station</option>
						<option id="Grant Road"value="Grant Road">Grant Road</option>
						<option id="Mumbai Central"value="Mumbai Central">Mumbai Central</option>
						<option id="Mahalaxmi"value="Mahalaxmi"> Mahalaxmi</option>
						<option id="Lower Parel"value="Lower Parel"> Lower Parel</option>
						<option id="Elphinstone Road"value="Elphinstone Road">Elphinstone Road</option>
						<option id="Dadar"value="Dadar">Dadar</option>
						<option id="Matunga Road" value="Matunga Road">Matunga Road</option>
						<option id="Mahim"value="Mahim">Mahim</option>
						<option id="Bandra"value="Bandra">Bandra</option>
						<option id="Khar Road"value="Khar Road">Khar Road</option>
						<option id="Santacruz"value="Santacruz">Santacruz</option>
						<option id="Vile Parle"value="Vile Parle">Vile Parle</option>
						<option id="Jogeshwari"value="Jogeshwari">Jogeshwari</option>
						<option id="Goregaon"value="Goregaon">Goregaon</option>
						<option id="Malad"value="Malad">Malad</option>
						<option id="Kandivali"value="Kandivali">Kandivali</option>
						<option id="Borivali"value="Borivali">Borivali</option>
						<option id="Dahisar"value="Dahisar">Dahisar</option>
						<option id="Mira Road"value="Mira Road">Mira Road</option>
						<option id="Bhayandar"value="Bhayandar">Bhayandar</option>
						<option id="Naigaon"value="Naigaon">Naigaon</option>
						<option id="Vasai Road"value="Vasai Road">Vasai Road</option>
						<option id="Nala Sopara"value="Nala Sopara">Nala Sopara</option>
						<option id="Virar"value="Virar">Virar</option>
						<option id="Valtarna"value="Valtarna">Valtarna</option>
						<option id="Saphale"value="Saphale">Saphale</option>
						<option id="Kelve Road"value="Kelve Road">Kelve Road</option>
						<option id="Palghar"value="Palghar">Palghar</option>
						<option id="Umroli"value="Umroli">Umroli</option>
						<option id="Boisar"value="Boisar">Boisar</option>
						<option id="Vangaon"value="Vangaon">Vangaon</option>
						<option id="Dahanu Road"value="Dahanu Road">Dahanu Road</option>
						
</select>
					  </div>
					  
					  <div class="form-group">

						<label>Destination:</label>
							<select  name="destination" id="myform" required>
							<option  id="123from" value="123from">To</option>
						<option id="Churchgate Station"value="Churchgate Station">Churchgate Station</option>
						<option id="Marine Lines"value="Marine Lines">Marine Lines</option>
						<option id="Charni Road Station"value="Charni Road Station">Charni Road Station</option>
						<option id="Grant Road"value="Grant Road">Grant Road</option>
						<option id="Mumbai Central"value="Mumbai Central">Mumbai Central</option>
						<option id="Mahalaxmi"value="Mahalaxmi"> Mahalaxmi</option>
						<option id="Lower Parel"value="Lower Parel"> Lower Parel</option>
						<option id="Elphinstone Road"value="Elphinstone Road">Elphinstone Road</option>
						<option id="Dadar"value="Dadar">Dadar</option>
						<option id="Matunga Road" value="Matunga Road">Matunga Road</option>
						<option id="Mahim"value="Mahim">Mahim</option>
						<option id="Bandra"value="Bandra">Bandra</option>
						<option id="Khar Road"value="Khar Road">Khar Road</option>
						<option id="Santacruz"value="Santacruz">Santacruz</option>
						<option id="Vile Parle"value="Vile Parle">Vile Parle</option>
						<option id="Jogeshwari"value="Jogeshwari">Jogeshwari</option>
						<option id="Goregaon"value="Goregaon">Goregaon</option>
						<option id="Malad"value="Malad">Malad</option>
						<option id="Kandivali"value="Kandivali">Kandivali</option>
						<option id="Borivali"value="Borivali">Borivali</option>
						<option id="Dahisar"value="Dahisar">Dahisar</option>
						<option id="Mira Road"value="Mira Road">Mira Road</option>
						<option id="Bhayandar"value="Bhayandar">Bhayandar</option>
						<option id="Naigaon"value="Naigaon">Naigaon</option>
						<option id="Vasai Road"value="Vasai Road">Vasai Road</option>
						<option id="Nala Sopara"value="Nala Sopara">Nala Sopara</option>
						<option id="Virar"value="Virar">Virar</option>
						<option id="Valtarna"value="Valtarna">Valtarna</option>
						<option id="Saphale"value="Saphale">Saphale</option>
						<option id="Kelve Road"value="Kelve Road">Kelve Road</option>
						<option id="Palghar"value="Palghar">Palghar</option>
						<option id="Umroli"value="Umroli">Umroli</option>
						<option id="Boisar"value="Boisar">Boisar</option>
						<option id="Vangaon"value="Vangaon">Vangaon</option>
						<option id="Dahanu Road"value="Dahanu Road">Dahanu Road</option>
						
</select>
					  </div>
					  
					  <div class="form-group container1">
						<label style="margin-right:2%;">Class:</label>
						<label class="radio-inline">
						  <input type="radio" value="First Class" name="optradio_class" required / >First Class
						</label>
						<label class="radio-inline">
						  <input type="radio" value="Second Class" name="optradio_class"required />Second Class
						</label>
					  </div>
					
					<div class="col-md-4 col-lg-4" style="padding:0;">		
					  <div class="form-group">
						<label>Duration:</label>
						<select class="form-control" name="duration" required>
						    <option>--Select Duration--</option>
							<option id="Monthly">Monthly</option>
							<option id="Quarterly">Quarterly</option>
						</select>
					  </div>
					</div>
					
					<div class="clearfix"></div>
				  </div>
				  
				  <div class="modal-footer">
					<input type="submit" class="btn btn-primary" name="btn_submit" value="Submit" onclick="submit" />
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				  </div>
				  
				  </form>
				  
				</div>

			  </div>
			</div>
		</div>
		
	<div >		
		<ul class="nav nav-tabs" id="myTab">
			<li class="active"><a href="#pending"><font color="black">Pending Requests</font></a></li>
			<li><a href="#accepted" ><font color="black">Accepted Requests</font></a></li>
			<li><a href="#expiry"><font color="black">Expiry Requests</font></a></li>
	    </ul>
		<br><br>
		<div class="tab-content">
			<div class="tab-pane fade in active" id="pending">
			
			
				   <table class="table table-bordered" bgcolor="black">
		  
			
				<div class="row d-flex align-items-stretch no-gutters">
			<div class="col-md-12 p-4 p-md-5 order-md-last bg-dark" style="margin-top:2%;">
			
			<?php
			
			$sel = "select source,destination,classofticket,duration,expirydate,status from passdetails where sid='$sid_session' and status='Pending'";
			$rel=$con->query($sel);
			if(mysqli_num_rows($rel)==0)
			{			  
				echo "<center><h3><br><br>No records to display</h3></center>";			
			}
			else
			{				
				echo'<thead style="background-color:grey;color:white">           
				<tr>                  						
				<th bgcolor="black">Source</th>
				<th bgcolor="black">Destination</th>
				<th bgcolor="black">Class of Ticket</th>
				<th bgcolor="black">Duration</th>
				<th bgcolor="black">Expiry Date</th>
				<th bgcolor="black">Status</th>							
				</tr>
				</thead>

				<tbody>';
					  
				while($data=mysqli_fetch_array($rel))
				{		
					$source=$data['source'];
					$destination=$data['destination'];
					$classofticket=$data['classofticket'];							
					$duration=$data['duration'];
					$expirydate=$data['expirydate'];
					$status=$data['status'];					
					
					echo'<td bgcolor="white">'.$source.'</td>
					<td bgcolor="white">'.$destination.'</td>
					<td bgcolor="white">'.$classofticket.'</td>
					<td bgcolor="white">'.$duration.'</td>
					<td bgcolor="white">'.$expirydate.'</td>
					<td bgcolor="white">'.$status.'</td>					
					</tr>';					
				}
				echo'</tbody>';
			}		
					
			?>
				</div>
		</div>		 			
		  </table>
		</div>
		

			<div class="tab-pane fade" id="accepted">
				 <table class="table table-bordered table-hover">
			
			<?php
			
			$currdate = date('Y-m-d');
			
			$sel = "select passid,source,destination,classofticket,duration,expirydate,status,filename from passdetails where sid='$sid_session' and status='Accepted'";
			$rel=$con->query($sel);
			if(mysqli_num_rows($rel)==0)
			{			  
				echo "<center><h3><br><br>No records to display</h3></center>";				
			}
			else
			{				
				echo'<thead style="background-color:grey;color:white">           
				<tr>                  						
			<th bgcolor="black">Source</th>
				<th bgcolor="black">Destination</th>
				<th bgcolor="black">Class of Ticket</th>
				<th bgcolor="black">Duration</th>
				<th bgcolor="black">Expiry Date</th>
				<th bgcolor="black">Status</th>	
<th bgcolor="black">PDF</th>					
				</tr>
				</thead>

				<tbody>';
					  
				while($data=mysqli_fetch_array($rel))
				{		
					$source=$data['source'];
					$destination=$data['destination'];
					$classofticket=$data['classofticket'];							
					$duration=$data['duration'];
					$expirydate=$data['expirydate'];
					$status=$data['status'];
					$filename=$data['filename'];
					$passid=$data['passid'];					
					
							echo'<td bgcolor="white">'.$source.'</td>
					<td bgcolor="white">'.$destination.'</td>
					<td bgcolor="white">'.$classofticket.'</td>
					<td bgcolor="white">'.$duration.'</td>
					<td bgcolor="white">'.$expirydate.'</td>
					<td bgcolor="white">'.$status.'</td>';
					if($status=="Accepted" && $filename!="" && $currdate <= $expirydate)
					{
						echo'<td><a href="Downloadfile.php?passid='.$passid.'">Download PDF</a></td>';
					}
					else
					{
						echo'<td bgcolor="white">Option Not Available</td>';	
					}		
					'</tr>';
					
					echo'</tr>';				
				}
				echo'</tbody>';
			}		
					
			?>
						 			
		  </table>
		</div>
	
		<div class="tab-pane fade" id="expiry">
			
			<?php
			
			$k = 0;
			$currdate1 = date('Y-m-d');
			
			$sel1 = "select expirydate from passdetails where sid='$sid_session' and status='Accepted'";
			$rel1=$con->query($sel1);
			if(mysqli_num_rows($rel1)==0)
			{
				echo "<center><h3><br><br>No records to display</h3></center>";				
			}
			else
			{
				echo'<table class="table table-bordered table-hover">';	
				while($data1=mysqli_fetch_array($rel1))
				{
					$expirydate1=$data1['expirydate'];
					if($currdate1 > $expirydate1)
					{
						$sel = "select passid,source,destination,classofticket,duration,expirydate,status,filename from passdetails where sid='$sid_session' and status='Accepted'";
						$rel=$con->query($sel);
						if(mysqli_num_rows($rel)==0)
						{			  
							//echo "<center><h3><br><br>No records to display</h3></center>";
							
						}
						else
						{							
							echo'<thead style="background-color:grey;color:white">           
							<tr>                  						
									<th bgcolor="black">Source</th>
				<th bgcolor="black">Destination</th>
				<th bgcolor="black">Class of Ticket</th>
				<th bgcolor="black">Duration</th>
				<th bgcolor="black">Expiry Date</th>
				<th bgcolor="black">Status</th>					
							</tr>
							</thead>

							<tbody>';
								  
							while($data=mysqli_fetch_array($rel))
							{		
								$source=$data['source'];
								$destination=$data['destination'];
								$classofticket=$data['classofticket'];							
								$duration=$data['duration'];
								$expirydate=$data['expirydate'];
								$status=$data['status'];
								$filename=$data['filename'];
								$passid=$data['passid'];					
								
								echo'<td bgcolor="white">'.$source.'</td>
					<td bgcolor="white">'.$destination.'</td>
					<td bgcolor="white">'.$classofticket.'</td>
					<td bgcolor="white">'.$duration.'</td>
					<td bgcolor="white">'.$expirydate.'</td>
					<td bgcolor="white">'.$status.'</td>	
								</tr>';					
							}
							echo'</tbody>';
						}		
				   }
				   else
				   {
					   $k = 1;
				   } 
			   }
			   if($k == 1)
			   {
					echo "<center><h3><br><br>No records to display</h3></center>";
			   }
			   
			echo'</table>';
		   }
								
		?>
						 					 
		</div>
	</div>
		
		 
		</div>
		
	</div>
</div>	

<?php 

if(isset($_POST['btn_submit']))
{	
    $source = $_POST['source'];
	$destination = $_POST['destination'];	
	$optradio_class = $_POST['optradio_class'];
	$duration = $_POST['duration'];	
	$status="Pending";	
							
	$ins = "Insert into passdetails(sid,source,destination,classofticket,duration,expirydate,status,filename) values('$sid_session','$source','$destination','$optradio_class','$duration','','$status','')";							
	
	if(mysqli_query($con, $ins)&&($source != $destination))
	{
		echo "<script>alert('Request Sent succesfully');</script>";
		echo "<script>window.location.href='StudentRequest.php'</script>";
									
	}	
	else
	{
		echo "<script>alert('Source and Destination is Same Invalid');</script>";
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
				source : "required",
				destination: "required",
				optradio_class: "required",
				duration : { value1: "--Select Duration--" },				
           },

            messages:{				
				source:"<h5 style='color:red;font-size: 15px;'><b>Please Enter Valid Source </b></h5>",
				destination:"<h5 style='color:red;font-size: 15px;'><b>Please Enter Valid Age </b></h5>",
				optradio_class:"<h5 style='color:red;font-size: 15px;'><b>Please Select Valid Class</b></h5>",
				duration:{ value1: "<h5 style='color:red; font-size:15px;'><b>Please Select Valid Duration</b></h5>" },						
            },
			errorPlacement: function(error, element) 
			{
            if ( element.is(":radio") ) 
            {
                error.appendTo( element.parents('.container1') );
            }
            else 
            { // This is the default behavior 
                error.insertAfter( element );
            }
         },
		 
            submitHandler: function(form){
                form.submit();
            }

        });

    }); 
	
	$(document).ready(function(){ 
    $("#myTab a").click(function(e){
    	e.preventDefault();
    	$(this).tab('show');
    });
});
	

</script>		


</body>
</html>