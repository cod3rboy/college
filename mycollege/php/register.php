<?php
if(isset($_POST['btnRegister']) || isset($_POST['txtUsername'])){
 
$fullname = $_POST['txtFullname'];
$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];
$retype = $_POST['txtRetype'];
$email = $_POST['txtEmail'];
$faculty = $_POST['txtFaculty'];
$accounttype = $_POST['txtAccountType'];

if($password!=$retype){
    echo "password not match";
    header('Refresh:3;../Register.html');
    
}

include "connect.php";

$insert = "INSERT INTO account (Fullname,Username,Password,Faculty,Email,AccountType ) VALUES ('$fullname','$username','$password','$faculty','$email','$accounttype')";
if(mysql_query($insert)){
    echo "Record saved";
header('Refresh:3;../index.html');
}else{
    echo "Something Wrong";
}

}
else{
    echo "dont try to be smart";
}


?>