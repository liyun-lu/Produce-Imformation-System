<!DOCTYPE html>
<html>
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
								        <li class="list-group-item"><a href="user_find.html">查询产品信息</a></li>
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
					<form class="form-horizontal" role="form" action="../php/user_find.php" method="post">
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
				</div>	
			</div>
		</div>
	</div>
</body>
</html>