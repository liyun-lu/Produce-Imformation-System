<?php
	header("Content-Type: text/html; charset=utf-8");
	$link=mysqli_connect("localhost","root","","database");
	if($link->connect_error)
	{
		die("连接失败:".$link->connect_error);
	}

	mysqli_query($link,"SET NAMES utf8");
	$cno=$_COOKIE["uno"];//从cookie中获取账号
	// echo $cno;
	$cname=$_POST["cname"];
	$type=$_POST["type"];
	$contact=$_POST["contact"];
	$phone=$_POST["phone"];
	$address=$_POST["address"];
	$cremarks=$_POST["cremarks"];

	if($cname == "" || $type == "" || $contact == "" || $phone == "" || $address == "" || $cremarks == "")
	{
		echo "<script type='text/javascript'> alert('请把信息填写完整'); history.back();</script>";
	}
	else
	{
		$sql="INSERT INTO clients( cno, cname, type, contact, phone, address, cremarks) VALUES ('$cno','$cname','$type','$contact','$phone','$address','$cremarks');";
		// echo $sql;
		$result=mysqli_query($link,$sql);
		echo "<script type='text/javascript'>alert('添加订单信息成功');	window.location.href='../html/user_add.html';</script>";
	}

	mysqli_close($link);

?>