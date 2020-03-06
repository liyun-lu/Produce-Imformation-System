<?php
	header("Content-Type: text/html; charset=utf-8");
	$link=mysqli_connect("localhost","root","","database");
	if($link->connect_error)
	{
		die("连接失败:".$link->connect_error);
	}

	mysqli_query($link,"SET NAMES utf8");
	$cid=$_POST["cid"];
	$cname=$_POST["cname"];
	$type=$_POST["type"];
	$contact=$_POST["contact"];
	$phone=$_POST["phone"];
	$address=$_POST["address"];
	$cremarks=$_POST["cremarks"];

	if($cid == "")
	{
		echo "<script type='text/javascript'> alert('请输入订单编号'); history.back();</script>";
	}
	else
	{
		if($cname == "" && $contact == "" && $phone == "" && $address == "" && $cremarks == "")
		{
			echo "<script type='text/javascript'> alert('请输入要修改的信息'); history.back();</script>";
		}
		else
		{
			$sql="SELECT cid FROM clients WHERE cid='$cid'";
			$result=mysqli_query($link,$sql);
			if(mysqli_num_rows($result)== 0)
			{
				echo "<script type='text/javascript'> alert('不存在该客户信息'); history.back();</script>";
			}
			else
			{
				//多条件查询，获取查询语句
		        $setlist = array();

		         $setlist[] = "type='$type'";
		         if($cname != "")
		         {
		            $setlist[] = "cname='$cname'";
		         }
		         if($contact != "")
		         {
		            $setlist[] = "contact='$contact'";
		         }
		         if($phone != "")
		         {
		            $setlist[] = "phone='$phone'";
		         }
		        if($address != "")
		        {
		            $setlist[] = "address='$address'";
		        }
		        if($cremarks != "")
		        {
		            $setlist[] = "cremarks='$cremarks'";
		        } 
		        //组装修改条件
		         if(count($setlist) > 0){
		            $set = " SET ".implode(' , ' , $setlist); 
		         }
		         // echo $set;

				$sql="UPDATE clients $set WHERE cid='$cid';";
				// echo $sql;
				$result=mysqli_query($link,$sql);
				echo "<script type='text/javascript'>alert('修改客户信息成功');	window.location.href='../html/alter.html';</script>";
			}
		}	
	}

	mysqli_close($link);

?>