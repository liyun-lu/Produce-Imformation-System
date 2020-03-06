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
	<title>普通用户查询产品页面</title>
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
					        <div id="collapseOne" class="panel-collapse collapse in">
							        <ul class="list-group">
								        <li class="list-group-item"><a href="../html/user_find.html">查询产品信息</a></li>
								        <li class="list-group-item"><a href="../../clients/html/user_add.html">购买产品</a></li>
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
					        <div id="collapseTwo" class="panel-collapse collapse">
					        	<ul class="list-group">
								    <li class="list-group-item"><a href="../../clients/html/user_find.html">我的订单</a></li>
								    <li class="list-group-item"><a href="../../user/html/alter_psw.html">修改登录密码</a></li>
								</ul>		
					        </div>
					    </div>
					</div>
				</div>
			</div> 
			<div class="col-md-10">
				<div class="container-right">
					<form class="form-horizontal" role="form" action="user_find.php" method="post">
						  <div class="form-group">
						    <label for="pname" class="col-sm-2 control-label">产品名称</label>
						    <div class="col-sm-3">
						      <input type="text" class="form-control" id="pname" name="pname" placeholder="请输入名称">
						    </div>
						    <div class="col-sm-offset-2 col-sm-3">
						      <button type="submit" class="btn btn-success btn-lg ">查询产品信息</button>
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
	$pname=$_POST["pname"];

	if($pname == "")
	{
		echo "<script type='text/javascript'> alert('请把信息填写完整'); history.back();</script>";
	}
	else
	{
		$sql="SELECT * FROM products WHERE pname='$pname';";
		$result=mysqli_query($link,$sql);
		if(mysqli_num_rows($result)== 0)
		{
			echo "<script type='text/javascript'> alert('该产品不存在'); history.back();</script>";
		}
		else
		{   
?>
                <table class="table table-bordered table-hover">
                      <caption>查询结果如下：</caption>
                      <thead>
                        <tr>
                          <th>产品编号</th>
                          <th>产品名称</th>
                          <th>产品规模</th>
                          <th>产品价格</th>
                          <th>产品数量下限</th>
                          <th>产品数量上限</th>
                        </tr>
                      </thead>
                      <tbody >
<?php
            while($row = mysqli_fetch_assoc($result)) //存在多条数据，循环输出
            {
?>                      

                        <tr>
                            <td><?php echo $row["pno"]; ?></td>
                            <td><?php echo $row["pname"]; ?></td>
                            <td><?php echo $row["size"]; ?></td>
                            <td><?php echo $row["price"]; ?></td>
                            <td><?php echo $row["minqty"]; ?></td>
                            <td><?php echo $row["maxqty"]; ?></td>
                        </tr>
<?php  
            }
?>
                       </tbody>
                </table>

<?php
        }
    }
    mysqli_close($link);
?>


                </div>  
            </div>
        </div>
    </div>					

</body>
</html>