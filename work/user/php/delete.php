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

	if($uno == "" || $uname == "")
	{
		echo "<script type='text/javascript'> alert('请把信息填写完整'); history.back();</script>";
	}
	else
	{
		$sql="SELECT uno FROM users WHERE uno='$uno' AND uname='$uname';";
		$result=mysqli_query($link,$sql);
		if(mysqli_num_rows($result) == 0)
		{
			echo "<script type='text/javascript'> alert('该用户不存在'); history.back();</script>";
		}
		else
		{   
			$sql="DELETE FROM users WHERE uno='$uno' AND uname='$uname';";
			$result=mysqli_query($link,$sql);
			echo "<script type='text/javascript'> alert('删除用户信息成功'); window.location.href='../html/delete.html'; </script>";
		}
	}

	mysqli_close($link);

?>