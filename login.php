<?php
		
			$con= mysqli_connect("localhost","root","","login");
			if(mysqli_connect_error())
		{
			echo "connection failed";
			}
else if (isset($_POST['login']))
{
		$uname=$_POST['uname'];
		$pwd=$_POST['pwd'];
		$query= "INSERT INTO user VALUES('$uname','$pwd')";
			mysqli_query($con,$query);
}
?>