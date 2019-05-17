<?php
if(isset($_POST['btnRegister']) || isset($_POST['txtUsername'])){
    
$fullname = $_POST['txtFullname'];
$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];
$retype = $_POST['txtRetype'];

if($password!=$retype){
    echo "password not match";
    header('Refresh:3;../adminRegister.html');
    
}

include "connect.php";

$insert = "INSERT INTO adminAccount (Fullname,Username,Password ) VALUES ('$fullname','$username','$password')";
if(mysql_query($insert)){
    echo "Record saved";
header('Refresh:3;../admin/admin-login.html');
}else{
    echo "Something Wrong";
}

}
else{
    echo "dont try to be smart";
}


?>