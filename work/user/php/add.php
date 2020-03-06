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
	$password=$_POST["password"];
	$repassword=$_POST["repassword"];
	$permission=$_POST["permission"];
	$uremarks=$_POST["uremarks"];

	if($uno == "" || $uname == "" || $password == "" || $repassword == "")
	{
		echo "<script type='text/javascript'> alert('请把信息填写完整'); history.back();</script>";
	}
	else
	{
		if($password != $repassword)
		{
			echo "<script type='text/javascript'> alert('密码不一致！'); history.back();</script>";
		}
		else
		{
			$sql="SELECT uno FROM users WHERE uno='$uno';";
			$result=mysqli_query($link,$sql);
			if(mysqli_num_rows($result)!= 0)
			{
				echo "<script type='text/javascript'> alert('用户账号已存在'); history.back();</script>";
			}
			else
			{   
				$sql="INSERT INTO users( uno, uname, password, permission, uremarks) VALUES ('$uno','$uname','$password','$permission','$uremarks');";
				$result=mysqli_query($link,$sql);
				// echo $sql;
				echo "<script type='text/javascript'> alert('添加用户信息成功'); window.location.href='../html/add.html'; </script>";
			}
		}
	}

	mysqli_close($link);

?>