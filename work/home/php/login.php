<?php
	header("Content-Type: text/html; charset=utf-8");
	$link=mysqli_connect("localhost","root","","database");
	if($link->connect_error)
	{
		die("连接失败:".$link->connect_error);
	}

	mysqli_query($link,"SET NAMES utf8");
	$uno=$_POST["uno"];
	$password=$_POST["password"];
	if($uno == "" || $password == "")
	{
		echo "<script type='text/javascript'> alert('请输入用户名或密码！'); history.back();</script>";
	}
	else
	{
		if(isset($_POST["permission"]))
		{
			$permission=$_POST["permission"];
			$sql="SELECT uno, password,permission FROM users WHERE uno='$uno' AND password='$password' AND permission='$permission';";
			// echo $sql;
			$result=mysqli_query($link,$sql);
			if(mysqli_num_rows($result)!= 0)
			{
				if($permission == "yes")
					echo "<script type='text/javascript'> alert('登录成功！欢迎您，管理员。'); window.location.href='../../manager/html/index.html';</script>";
				if($permission == "no")
					echo "<script type='text/javascript'> alert('登录成功！欢迎您。'); 
					window.location.href='../../user/html/index.html';</script>";
				setcookie("uno",$uno,time()+3600*24,"/");//名称，值，时间一天，路径：整个域
			}
			else
			{
				mysqli_free_result($result);
				echo "<script type='text/javascript'> alert('登录失败！用户名或密码或用户类型不正确。'); history.back();</script>";
			}
		}
		else
		{
			echo "<script type='text/javascript'> alert('请选择用户类型！'); history.back();</script>";
		}
	}
	

	mysqli_close($link);
?>
