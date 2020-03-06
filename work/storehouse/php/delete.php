<?php
	header("Content-Type: text/html; charset=utf-8");
	$link=mysqli_connect("localhost","root","","database");
	if($link->connect_error)
	{
		die("连接失败:".$link->connect_error);
	}

	mysqli_query($link,"SET NAMES utf8");
	$sno=$_POST["sno"];
	$sname=$_POST["sname"];

	if($sno == "" || $sname == "")
	{
		echo "<script type='text/javascript'> alert('请把信息填写完整'); history.back();</script>";
	}
	else
	{
		$sql="SELECT sno FROM storehouse WHERE sno='$sno' AND sname='$sname';";
		$result=mysqli_query($link,$sql);
		if(mysqli_num_rows($result)== 0)
		{
			echo "<script type='text/javascript'> alert('不存在该仓库'); history.back();</script>";
		}
		else
		{   
			$sql="DELETE FROM storehouse WHERE sno='$sno' AND sname='$sname';";
			$result=mysqli_query($link,$sql);
			echo "<script type='text/javascript'> alert('删除仓库信息成功'); window.location.href='../html/delete.html'; </script>";
		}
	}

	mysqli_close($link);

?>