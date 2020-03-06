<!DOCTYPE html>
<html>
<head>
	<title></title>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../user/css/style.css">
	<title>普通用户查询订单页面</title>
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="../../user/html/index.html"><p class="navbar-text">企业产品仓库基本信息管理系统</p></a>
            </div>
            <div>
	        	<ul class="nav navbar-nav navbar-right">
                	<li><a href="../../home/html/index.html"><span class="glyphicon glyphicon-log-in"></span> 退出</a></li>
            	</ul>
	    	</div>
        </div>
    </nav>

    <div class="row wrapper">
		<div class="my-container">
			<div class="col-md-2">
				<div class="container-left">
					<div class="panel-group" id="accordion">
					    <div class="panel panel-default">
					        <div class="panel-heading">
					            <h4 class="panel-title">
					                <a data-toggle="collapse" data-parent="#accordion" 
					                href="#collapseOne">
					                产品基本信息
					                </a>
					            </h4>
					        </div>
					        <div id="collapseOne" class="panel-collapse collapse">
							        <ul class="list-group">
								        <li class="list-group-item"><a href="../../products/html/user_find.php">查询产品信息</a></li>
								        <li class="list-group-item"><a href="../html/user_add.html">购买产品</a></li>
								    </ul>					  				
					            </div>
					    </div>
					    <div class="panel panel-default">
					        <div class="panel-heading">
					            <h4 class="panel-title">
					                <a data-toggle="collapse" data-parent="#accordion" 
					                href="#collapseTwo">
					                我的个人信息
					            </a>
					            </h4>
					        </div>
					        <div id="collapseTwo" class="panel-collapse collapse in">
					        	<ul class="list-group">
								    <li class="list-group-item"><a href="../html/user_find.html">我的订单</a></li>
								    <li class="list-group-item"><a href="../../user/html/alter_psw.html">修改登录密码</a></li>
								</ul>		
					        </div>
					    </div>
					</div>
				</div>
			</div> 
			<div class="col-md-10">
				<div class="container-right">
					<form class="form-horizontal" role="form" action="user_find.php">
			  				<div class="form-group">
						    <div class="col-sm-offset-2 col-sm-3">
						      <button type="submit" class="btn btn-success btn-lg ">查询我的订单</button>
						    </div>
						  </div>
					</form>

<?php
    // header("Content-Type: text/html; charset=utf-8");
    $link=mysqli_connect("localhost","root","","database");
    if($link->connect_error)
    {
        die("连接失败:".$link->connect_error);
    }

    mysqli_query($link,"SET NAMES utf8");
    $cno=$_COOKIE["uno"];

 	$sql="SELECT cid,cname,type,contact,phone,address,cremarks FROM clients WHERE cno='$cno';";
    $result=mysqli_query($link,$sql);
    if(mysqli_num_rows($result)== 0)
    {
        echo "<script type='text/javascript'> alert('您没有订单信息'); history.back();</script>";
    }
    else//row>0
    {
?>
                <table class="table table-bordered table-hover">
                      <caption>查询结果如下：</caption>
                      <thead>
                        <tr>
                          <th>订单编号</th>
                          <th>姓名</th>
                          <th>客户类型</th>
                          <th>联系人</th>
                          <th>联系电话</th>
                          <th>通讯地址</th>
                          <th>备注</th>
                        </tr>
                      </thead>
                      <tbody >
<?php
            while($row = mysqli_fetch_assoc($result)) //存在多条数据，循环输出
            {
?>
                        <tr>
                            <td><?php echo $row["cid"]; ?></td>
                            <td><?php echo $row["cname"]; ?></td>
                            <td><?php echo $row["type"]; ?></td>
                            <td><?php echo $row["contact"]; ?></td>
                            <td><?php echo $row["phone"]; ?></td>
                            <td><?php echo $row["address"]; ?></td>
                            <td><?php echo $row["cremarks"]; ?></td>
                        </tr>
<?php  
            }
?>
                       </tbody>
                </table>

<?php
    }
    mysqli_close($link);
?>

</body>
</html>