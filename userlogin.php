<?php
//include 'db.php';
$con = mysqli_connect("localhost","root","","hmusic");

if(isset($_POST['btn']))
{
	$id=$_POST['username'];
	$pass=$_POST['password'];
	$val=password_hash($pass);
	$q="select * from users where username ='".$id."' and password ='".$val."'";
	
	$query=mysqli_query($con,$q);
	if($query >0)
	{
		header("location:welcome.php");

	}
	
}


?>