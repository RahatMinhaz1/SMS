<?php
session_start();
require_once('../model/alldb.php');
if(isset($_POST['submit']))
{
	$id=$_POST['id'] ;
	$pass=$_POST['pass'];
	if(empty($id||$pass))
	{
      $_SESSION['error']="Please fill up the form first";
      header('location:../view/login.php');
	}
	else
	{
		$res=auth($id,$pass);
		if(mysqli_num_rows($res)==1)
		{
			header('location:../view/registration.php');
		}
		else
		{
			$_SESSION['error']="Invalid User";
      header('location:../view/login.php');
		}

	}
}
?>