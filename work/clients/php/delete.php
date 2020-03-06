<?php
	header("Content-Type: text/html; charset=utf-8");
	$link=mysqli_connect("localhost","root","","database");
	if($link->connect_error)
	{
		die("连接失败:".$link->connect_error);
	}

	mysqli_query($link,"SET NAMES utf8");
	$cno=$_POST["cno"];
	$cname=$_POST["cname"];

	if($cno == "" || $cname == "")
	{
		echo "<script type='text/javascript'> alert('请把信息填写完整'); history.back();</script>";
	}
	else
	{
		$sql="SELECT cno,cname FROM clients WHERE cno='$cno' AND cname='$cname';";
		$result=mysqli_query($link,$sql);
		if(mysqli_num_rows($result)== 0)
		{
			echo "<script type='text/javascript'> alert('不存在该客户信息'); history.back();</script>";
		}
		else
		{
			$sql="DELETE FROM clients WHERE cno='$cno' AND cname='$cname';";
			$result=mysqli_query($link,$sql);
			echo "<script type='text/javascript'>alert('删除客户信息成功');	window.location.href='../html/delete.html';</script>";
		}
	}

	mysqli_close($link);

?>