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
	$size=$_POST["size"];
	$price=$_POST["price"];
	$maxqty=$_POST["maxqty"];
	$minqty=$_POST["minqty"];

	if($pno == "" || $pname == "" || $size == "" || $price == "" || $maxqty == "" || $minqty == "")
	{
		echo "<script type='text/javascript'> alert('请把信息填写完整'); history.back();</script>";
	}
	else
	{
		$sql="SELECT pno FROM products WHERE pno='$pno';";
		$result=mysqli_query($link,$sql);
		if(mysqli_num_rows($result)!= 0)
		{
			echo "<script type='text/javascript'> alert('仓库编号已存在'); history.back();</script>";
		}
		else
		{   
			$sql="INSERT INTO products( pno, pname, size, price, maxqty, minqty) VALUES ('$pno','$pname','$size','$price','$maxqty','$minqty');";
			$result=mysqli_query($link,$sql);
			echo "<script type='text/javascript'> alert('添加仓库信息成功'); window.location.href='../html/add.html'; </script>";
		}
	}

	mysqli_close($link);

?>