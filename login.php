<?php
    $u = $_GET['u'];
    $p = $_GET['p'];
    $con = mysqli_connect("localhost", "root", "", "data");
    $sql = "select * from ta where username='$u' and password='$p' limit 1";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) == 0){
        echo "Please check your username or password";
    }else{
        echo "Success";
    }
?>