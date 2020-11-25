
			
			<?php
			include("connection.php");
			$passid = $_POST['id'];
			$sel = "select s.name,p.source,p.destination,p.classofticket,p.duration,p.status from passdetails as p join student as s on s.sid = p.sid where 
			p.passid='".$passid."'";	
			$rel=$con->query($sel);				   
			while($data = mysqli_fetch_array($rel))
			{
				$output["name"] = $data['name'];
				$output["source"] = $data['source'];
				$output["destination"] = $data['destination'];
				$output["classofticket"] = $data['classofticket'];
				$output["duration"] = $data['duration'];
				$output["status"] = $data['status'];
			}
			
			echo json_encode($output);
		
			?>
					

