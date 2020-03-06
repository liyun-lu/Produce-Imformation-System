<?php
	header("Content-Type: text/html; charset=utf-8");
	$link=mysqli_connect("localhost","root","","database");
	if($link->connect_error)
	{
		die("连接失败:".$link->connect_error);
	}

	mysqli_query($link,"SET NAMES utf8");
	$uno=$_POST["uno"];
	$uname=$_POST["uname"];
	$permission=$_POST["permission"];
	$uremarks=$_POST["uremarks"];

	if($uno == "" || $uname == "")
	{
		echo "<script type='text/javascript'> alert('请把信息填写完整'); history.back();</script>";
	}
	else
	{
		$sql="SELECT uno FROM users WHERE uno='$uno';";
		$result=mysqli_query($link,$sql);
		if(mysqli_num_rows($result) == 0)
		{
			echo "<script type='text/javascript'> alert('该用户不存在'); history.back();</script>";
		}
		else
		{
			$sql="UPDATE users SET uname='$uname', permission='$permission', uremarks='$uremarks' WHERE uno='$uno';"; 
			$result=mysqli_query($link,$sql);
			// echo $sql;
			echo "<script type='text/javascript'> alert('修改用户信息成功'); window.location.href='../html/alter.html'; </script>";
			}
	}

	mysqli_close($link);

?>