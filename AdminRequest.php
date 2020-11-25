<?php include('AdminHeader.php');

$val = !empty($_SESSION["adminid_session"])?$_SESSION:" ";

if($val == " ")
{
	echo"<script>window.location.href='Login.php'</script>";
}
$adminid_session = $_SESSION["adminid_session"];
?>


<div class="content">		
	<div class="container">
	
	<div id="searchbox">
		 <form method="post">
			<div class="input-group" style="width: 30%;">
				<input name="search_name" type="text" class="form-control" placeholder="Search Student Name">
				<div class="input-group-btn">
					<button class="btn btn-primary" name="btn_search" type="submit">
						<i class="fa fa-search" aria-hidden="true" style="font-size: 15px;"></i>
					</button>
				</div>
			</div>	
		  </form>	
		</div>	
		
		<div class="col-md-12" style="margin-top:2%;">
			<table class="table table-bordered table-hover">
			
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
				$sel = "select s.name,s.age,s.address,s.collegename,s.class,s.contactno,s.emailid,p.passid
				,p.source,p.destination,p.classofticket,p.duration,p.status from passdetails as p join student as s on s.sid = p.sid where p.status='Pending' or p.status='Accepted'";				
			}
			else
			{
				$sel = "select s.name,s.age,s.address,s.collegename,s.class,s.contactno,s.emailid,p.passid,p.source,p.destination,p.classofticket,p.duration,p.status from passdetails as p join student as s on s.sid = p.sid where p.status='Pending' or p.status='Accepted' and s.name like '%$search_name%'";
			}
			
			$rel=$con->query($sel);
			if(mysqli_num_rows($rel)==0)
			{			  
				echo "<center><h3><br><br>No records to display</h3></center>";
				echo "<script>document.getElementById('searchbox').style.display='none'</script>";
			}
			else
			{
				echo "<script>document.getElementById('searchbox').style.display='block'</script>";	
				echo'<thead style="background-color:grey;color:white">           
				<tr>                  						
				<th>Student Name</th>
				<th>Age</th>
				<th>Contact Number</th>
				<th>Email ID</th>
				<th>Address</th>
				<th>College Name</th>
				<th>Class</th>
				<th>Action</th>		
				</tr>
				</thead>

				<tbody>';
					  
				while($data=mysqli_fetch_array($rel))
				{
					$passid=$data['passid'];					
					$name=$data['name'];
					$age=$data['age'];
					$address=$data['address'];							
					$collegename=$data['collegename'];
					$class=$data['class'];
					$contactno=$data['contactno'];
					$emailid=$data['emailid'];
					$status=$data['status'];
					
					
					echo'<td>'.$name.'</td>
					<td>'.$age.'</td>
					<td>'.$contactno.'</td>
					<td>'.$emailid.'</td>
					<td>'.$address.'</td>
					<td>'.$collegename.'</td>
					<td>'.$class.'</td>					
					<td><button class="btn btn-primary btn_view" id="'.$passid.'" >View More Details</button>';
					
					if($status=="Accepted")
					{
						echo'<button style="margin-left:3%;" class="btn btn-success btn_upload" id="'.$passid.'" >Upload PDF</button></td>';
					}
					
					echo'</tr>';					
				}
				echo'</tbody>';
			}		
					
			?>
						 			
		  </table>
		</div>
		
		<div class="col-md-12">
			<!-- Modal -->
			<div id="myModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			 <!-- Modal content-->

			 <div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Student Pass Details</h4>
				  </div>
				  <div class="modal-body" style="overflow: auto;">
						<div class="col-md-12 col-lg-12">							
							<label style="font-size: 16px;">Student Name: <span id="stname"style="font-weight: normal; font-size: 18px;"></span></label>
							<hr style="border-top:1px solid #c6c2c2;margin-top:10px;">
							
							<label style="font-size: 16px;">Source: <span id="source"style="font-weight: normal; font-size: 18px;"></span></label><hr style="border-top:1px solid #c6c2c2;margin-top:10px;">
							
							<label style="font-size: 16px;">Destination: <span id="destination" style="font-weight: normal; font-size: 18px;"></span></label><hr style="border-top:1px solid #c6c2c2;margin-top:10px;">
							
							<label style="font-size: 16px;">Class of Ticket: <span id="class_ticket" style="font-weight: normal; font-size: 18px;"></span></label><hr style="border-top:1px solid #c6c2c2;margin-top:10px;">
							
							<label style="font-size: 16px;">Duration: <span id="duration"style="font-weight: normal; font-size: 18px;"></span></label><hr style="border-top:1px solid #c6c2c2;margin-top:10px;">
							
							<label style="font-size: 16px;">Status: <span id="status"style="font-weight: normal; font-size: 18px;"></span></label>
							
						</div>
				  </div>
				  <div class="modal-footer" id="btns_footer">
				  
				  <form method="post">
				  
				    <input type="hidden" value="" name="hidd_passid" id="passid_id"/>
					
					<input type="submit" class="btn btn-primary" name="btn_accept" value="Accept" />
					<input type="submit" class="btn btn-danger" name="btn_decline" value="Decline" />
					
				 </form>
					
				  </div>
				</div>

			  </div>
			</div>
			
			
			<!-- Modal -->
			<div id="myModal_upload" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			 <!-- Modal content-->
			<form method="post" id="myform" enctype="multipart/form-data">
			
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Upload File</h4>
				  </div>
				  <div class="modal-body" style="overflow: auto;">
						<div class="col-md-12 col-lg-12">							
							<div class="form-group">
								<label for="file" style="font-size:15px;">Choose File:</label>
								<input type="file" id="file" name="fileToUpload">			 	
								<!--<label id="validation_upload" style="color:red; font-size:14px; display:none;"></label>-->
								
								<input type="hidden" value="" name="passid_upload" id="passid_u"/>
								
							</div>							
						</div>
				  </div>
				  <div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>				  
					<input type="submit" class="btn btn-primary" name="btn_submit" value="Submit" />					
				  </div>
				</div>
				
			</form>

			  </div>
			</div>
						
		</div>
		
	</div>
 </div>	

<?php 

if(isset($_POST['btn_accept']))
{
	$passid = $_POST["hidd_passid"];
	$status = "Accepted";
	
	$sel = "select duration from passdetails where passid='".$passid."'";
	$rel=$con->query($sel);	
	$data = mysqli_fetch_assoc($rel);
	$duration = $data['duration'];
	
	if($duration == "Monthly")
	{
		$expirydate = date('Y-m-d', strtotime("+1 months"));		
	}
	else if($duration == "Quarterly")
	{
		$expirydate = date('Y-m-d', strtotime("+3 months"));
	}
			
    $update = "Update passdetails set status='$status',expirydate='$expirydate' where 
	passid='$passid'";	
	if(mysqli_query($con, $update))
	{			
		echo "<script>alert('Request accepted successfully');</script>";		 
		echo "<script>window.location.href='AdminRequest.php'</script>"; 
	}
	else
	{
		echo "<script>alert('Invalid');</script>";
	}
}

if(isset($_POST['btn_decline']))
{
	$passid = $_POST["hidd_passid"];
	$status = "Declined";	
			
    $update = "Update passdetails set status='$status' where 
	passid='$passid'";	
	if(mysqli_query($con, $update))
	{			
		echo "<script>alert('Request declined successfully');</script>";		 
		echo "<script>window.location.href='AdminRequest.php'</script>"; 
	}
	else
	{
		echo "<script>alert('Invalid');</script>";
	}	
}


if(isset($_POST['btn_submit']))
{	
    $passid = $_POST["passid_upload"];
	
	$file=$_FILES['fileToUpload']['tmp_name'];
    $iname=$_FILES['fileToUpload']['name'];	
    
       if(isset($iname))
       {
            if(!empty($iname))
            {      
                $location = 'files/';  

                $FileType = strtolower(pathinfo($location.$iname,PATHINFO_EXTENSION));

                if($FileType != "pdf")
                { 			        
                    //echo "<script>document.getElementById('validation_upload').innerHTML='Sorry, only .pdf files are allowed.';</script>";
                    //echo "<script>document.getElementById('validation_upload').style.display = 'block';</script>"; 

					echo "<script>alert('Sorry, only .pdf files are allowed.');</script>";		
                }
                else
                {
                	if(move_uploaded_file($file, $location.$iname))
                    {						
						$update = "Update passdetails set filename='$iname' where 
						passid='$passid'";												
						if(mysqli_query($con, $update))
						{
							echo "<script>alert('File Uploaded succesfully');</script>";
							echo "<script>window.location.href='AdminRequest.php'</script>";
									
						}	
						else
						{
							echo "<script>alert('Invalid');</script>";
						}
						
					}
				}
			}
			else
			{
				//echo "<script>alert('Please Upload Image');</script>";
			}
	   }
			
}


include('footer.php')
?>


<script>

$('.btn_view').click(function(){
		
    var id = $(this).attr('id');	
		
    $.ajax({
		url: "modal_viewadminreq.php",
		method: "POST",
		data: {id: id},
		dataType:"json",
		success:function(data)
		{
			$('#myModal').modal('show');
			
			$('#stname').text(data.name);
			$("#source").text(data.source);
			$('#destination').text(data.destination);
			$('#class_ticket').text(data.classofticket);	
			$('#duration').text(data.duration);
			$('#status').text(data.status);	
			
			if(data.status == "Accepted")
			{
				$("#btns_footer").hide();
			}	
			else if(data.status == "Pending")
			{
				$("#btns_footer").show();
			}
		}
	});
	
	$('#passid_id').val(id);	
});


$('.btn_upload').click(function(){
	var id = $(this).attr('id');
	 
	$('#myModal_upload').modal('show');	
	
	$('#passid_u').val(id);
});


$(function()
    {
          $("#myform").validate({
           
            rules:{              
                fileToUpload : "required",												
            },
            messages:{             
				fileToUpload:"<h5 style='color:red;font-size: 15px;'><b>Please Upload  File</b></h5>",				
            }

        });

    });



</script>
