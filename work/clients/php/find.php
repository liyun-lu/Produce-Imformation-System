<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../manager/css/style.css">
    <title>管理员查询客户页面</title>
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="../../manager/html/index.html"><p class="navbar-text">企业产品仓库基本信息管理系统</p></a>
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
                                    客户基本信息
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                    <ul class="list-group">
                                        <li class="list-group-item"><a href="../html/find.html">查询客户信息</a></li>
                                        <li class="list-group-item"><a href="../html/add.html">添加客户信息</a></li>
                                        <li class="list-group-item"><a href="../html/delete.html">删除客户信息</a></li>
                                        <li class="list-group-item"><a href="../html/alter.html">修改客户信息</a></li>
                                    </ul>                                   
                                </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" 
                                    href="#collapseTwo">
                                    仓库基本信息
                                </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <ul class="list-group">
                                    <li class="list-group-item"><a href="../../storehouse/html/find.html">查询仓库信息</a></li>
                                    <li class="list-group-item"><a href="../../storehouse/html/add.html">添加仓库信息</a></li>
                                    <li class="list-group-item"><a href="../../storehouse/html/delete.html">删除仓库信息</a></li>
                                    <li class="list-group-item"><a href="../../storehouse/html/alter.html">修改仓库信息</a></li>
                                </ul>       
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" 
                                    href="#collapseThree">
                                    产品基本信息
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <ul class="list-group">
                                    <li class="list-group-item"><a href="../../products/html/find.html">查询产品信息</a></li>
                                    <li class="list-group-item"><a href="../../products/html/add.html">添加产品信息</a></li>
                                    <li class="list-group-item"><a href="../../products/html/delete.html">删除产品信息</a></li>
                                    <li class="list-group-item"><a href="../../products/html/alter.html">修改产品信息</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" 
                                    href="#collapseFour">
                                    用户基本信息
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <ul class="list-group">
                                    <li class="list-group-item"><a href="../../user/html/find.html">查询用户信息</a></li>
                                    <li class="list-group-item"><a href="../../user/html/add.html">添加用户信息</a></li>
                                    <li class="list-group-item"><a href="../../user/html/delete.html">删除用户信息</a></li>
                                    <li class="list-group-item"><a href="../../user/html/alter.html">修改用户信息</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-md-10">
                <div class="container-right">
                    <form class="form-horizontal" role="form" action="../php/find.php" method="post">

                          <div class="form-group">
                            <label for="cno" class="col-sm-1 control-label">编号</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control" id="cid" name="cid" placeholder="订单编号">
                            </div>
                            <label for="cno" class="col-sm-1 control-label">账号</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control" id="cno" name="cno" placeholder="客户账号">
                            </div>
                            <label for="cname" class="col-sm-1 control-label">姓名</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control" id="cname" name="cname" placeholder="订单姓名">
                            </div>
                            <label for="cname" class="col-sm-1 control-label">类型</label>
                            <div class="col-sm-2">
                              <select class="form-control selectpicker" id="type" name="type" data-live-search="true">
                                    <option value="notype">客户类型</option>
                                    <option value="commom">普通客户</option>
                                    <option value="vip">VIP客户</option>
                                </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="cname" class="col-sm-1 control-label">联系人</label>
                             <div class="col-sm-2">
                               <input type="text" class="form-control" id="contact" name="contact" placeholder="联系人">
                            </div>
                            <label for="cno" class="col-sm-1 control-label">电话</label>
                            <div class="col-sm-2">
                              <input type="text" class="form-control" id="phone" name="phone" placeholder="客户电话">
                            </div>
                            <label for="cname" class="col-sm-1 control-label">地址</label>
                            <div class="col-sm-3">
                              <input type="text" class="form-control" id="address" name="address" placeholder="订单地址">
                            </div>
                          </div>
                          
                          <div class="form-group">
                          <label for="cname" class="col-sm-1 control-label">详情</label>
                            <div class="col-sm-3">
                              <input type="text" class="form-control" id="cremarks" name="cremarks" placeholder="订单详情">
                            </div>
                            <div class="col-sm-offset-1 col-sm-3">
                              <button type="submit" id="submit" class="btn btn-success">查询客户信息</button>
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
    $cid=$_POST["cid"];
    $cno=$_POST["cno"];
    $cname=$_POST["cname"];
    $type=$_POST["type"];
    // echo $type;
    $contact=$_POST["contact"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];
    $cremarks=$_POST["cremarks"];

    if($cid == "" && $cno == "" && $cname == "" && $type == "notype" && $contact == "" && $phone == "" && $address == "" && $cremarks == "")
    {
        echo "<script type='text/javascript'> alert('请输入查询条件'); history.back();</script>";
    }
    else
    {
        //多条件查询，获取查询语句
        $wherelist = array();

        if($cid != "")
         {
            $wherelist[] = "cid='$cid'";
         }
         if($cno != "")
         {
            $wherelist[] = "cno='$cno'";
         }
         if($cname != "")
         {
            $wherelist[] = "cname='$cname'";
         }
         if($type != "notype")
         {
            $wherelist[] = "type='$type'";
         }
         if($contact != "")
         {
            $wherelist[] = "contact='$contact'";
         }
         if($phone != "")
         {
            $wherelist[] = "phone='$phone'";
         }
        if($address != "")
        {
            $wherelist[] = "address like '%{$address}%'";
        }
        if($cremarks != "")
        {
            $wherelist[] = "cremarks like '%{$cremarks}%'";
        }

        //组装查询条件
         if(count($wherelist) > 0){
            $where = " WHERE ".implode(' AND ' , $wherelist); 
         }
         // echo $where;


        $sql="SELECT * FROM clients $where;";
        // echo $sql;
        $result=mysqli_query($link,$sql);
        if(mysqli_num_rows($result)== 0)
        {
            echo "<script type='text/javascript'> alert('不存在该客户信息'); history.back();</script>";
        }
        else//row>0
        {
?>
                <table class="table table-bordered table-hover table-condensed">
                      <caption>查询结果如下：</caption>
                      <thead>
                        <tr>
                          <th>订单编号</th>
                          <th>客户账号</th>
                          <th>客户姓名</th>
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
                            <td><?php echo $row["cno"]; ?></td>
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
    }
    mysqli_close($link);
?>


                </div>  
            </div>
        </div>
    </div>

</body>
</html>