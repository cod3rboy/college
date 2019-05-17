<?php
if(isset($_POST['btnRegister']) || isset($_POST['txtUsername'])){
 $id = $_POST['txtID'];
$fullname = $_POST['txtFullname'];
$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];
$retype = $_POST['txtRetype'];
$faculty = $_POST['txtFaculty'];
$accounttype = $_POST['txtAccountType'];

if($password!=$retype){
    echo "password not match";
    header('Refresh:3;../admin/teacher-register.php');
    
}

include "connect.php";

$insert = "INSERT INTO teacher (tID,Fullname,Username,Password,Faculty,AccountType ) VALUES ('$id','$fullname','$username','$password','$faculty','$accounttype')";
if(mysql_query($insert)){
    echo "Record saved";
header('Refresh:3;../admin/home.php');
}else{
    echo "Something Wrong";
}

}
else{
    echo "dont try to be smart";
}


?>