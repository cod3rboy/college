<?php
if(isset($_POST['btnadminlogin']) || isset($_POST['txtUsername'])){
$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];
$accounttype = $_POST['txtAccountType'];

include  "connect.php";

$query = "SELECT * from account where Username ='$username' and Password = '$password' and AccountType = '$accounttype'";
$result = mysql_query($query);
if(mysql_num_rows($result)>0){
    echo "login success";
    header('Refresh:3;../admin/admindashboard.html');
}else{
   echo "invalid  username or password";

}
}else{
    echo "Don't try to be smart ";
}

?>