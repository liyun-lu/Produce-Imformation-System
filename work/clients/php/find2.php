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
        $sql="SELECT cno,cname,type,contact,phone,address,cremarks FROM clients WHERE cno='$cno' AND cname='$cname';";
        $result=mysqli_query($link,$sql);
        if(mysqli_num_rows($result)== 0)
        {
            echo "<script type='text/javascript'> alert('不存在该客户信息'); history.back();</script>";
        }
        else//row>0
        {
            while($row = mysqli_fetch_assoc($result)) //存在多条数据，循环输出
            {
                // $type=$row["type"];
                // $contact=$row["contact"];
                // $phone=$row["phone"];
                // $address=$row["address"];
                // $cremarks=$row["cremarks"];
                // echo "<tr> <td>$cno</td> <td>$cname</td> <td>$type</td> <td>$contact</td> <td>$phone</td> <td>$address</td> <td>$cremarks</td> </tr>";
                $data[]=$row;
            }
            // echo "<script type='text/javascript'>alert('删除客户信息成功');  window.location.href='../html/find.html';</script>";
        }
        $jsondata=json_encode($data,JSON_UNESCAPED_UNICODE);
        echo $jsondata;

    }

    mysqli_close($link);

?>