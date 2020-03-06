<?php
	header("Content-Type: text/html; charset=utf-8");
	$link=mysqli_connect("localhost","root","","database");
	if($link->connect_error)
	{
		die("连接失败:".$link->connect_error);
	}

	mysqli_query($link,"SET NAMES utf8");
	$pno=$_POST["pno"];
	$pname=$_POST["pname"];

	if($pno == "" || $pname == "")
	{
		echo "<script type='text/javascript'> alert('请把信息填写完整'); history.back();</script>";
	}
	else
	{
		$sql="SELECT pno FROM products WHERE pno='$pno' AND pname='$pname';";
		$result=mysqli_query($link,$sql);
		if(mysqli_num_rows($result) == 0)
		{
			echo "<script type='text/javascript'> alert('该产品不存在'); history.back();</script>";
		}
		else
		{   
			$sql="DELETE FROM products WHERE pno='$pno' AND pname='$pname';";
			$result=mysqli_query($link,$sql);
			echo "<script type='text/javascript'> alert('删除产品信息成功'); window.location.href='../html/delete.html'; </script>";
		}
	}

	mysqli_close($link);

?>