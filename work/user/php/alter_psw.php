<?php
	header("Content-Type: text/html; charset=utf-8");
	$link=mysqli_connect("localhost","root","","database");
	if($link->connect_error)
	{
		die("连接失败:".$link->connect_error);
	}

	mysqli_query($link,"SET NAMES utf8");
	$uno=$_COOKIE["uno"];
	// echo $uno;
	$newpassword=$_POST["newpassword"];
	$renewpassword=$_POST["renewpassword"];

	if($newpassword == "" || $renewpassword == "")
	{
		echo "<script type='text/javascript'> alert('请把信息填写完整'); history.back();</script>";
	}
	else
	{
		if($newpassword != $renewpassword)
		{
			echo "<script type='text/javascript'> alert('密码不一致！'); history.back();</script>";
		}
		else
		{
				$sql="UPDATE users SET password='$newpassword' WHERE uno='$uno';"; 
				$result=mysqli_query($link,$sql);
				// echo $sql;
				echo "<script type='text/javascript'> alert('修改密码成功'); window.location.href='../html/alter_psw.html'; </script>";
		}
	}

	mysqli_close($link);

?>