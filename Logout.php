<?php session_start(); 
?>


<!DOCTYPE html>

<html>


<body>

<?php 

if (isset($_SESSION['adminid_session']) && !empty($_SESSION['adminid_session']))
{
	session_destroy();
	echo "<script>window.location.href='login.php?login=admin'</script>";
}
else if(isset($_SESSION['sid_session'])&& !empty($_SESSION['sid_session']))
{
	session_destroy();
	echo "<script>window.location.href='Login.php?login=student'</script>";
}
	
?>


</body>

</html>
