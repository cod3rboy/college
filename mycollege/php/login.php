<?php
    session_start();
    //check whre login button is clicked or not
    if(isset($_POST['btnLogin']) || isset($_POST['txtUsername'])){
         //Initilize Variable
        $username = $_POST['txtUsername'];
        $password = $_POST['txtPassword'];
        
        //Connect to Database
        include "connect.php";
        
        //now we need to find Account Type of current username
        $sql = "SELECT AccountType from account where username = '$username'";
        $result = mysql_query($sql);
        
        while($record = mysql_fetch_assoc($result)){
            $accountType = $record['AccountType'];
        }
        
        //Login Co                              de
        $sql = "SELECT * FROM account where Username='$username' and Password ='$password' and AccountType='$accountType'";
        
        $result = mysql_query($sql);
        
        //Check where username and password are found
        if(mysql_num_rows($result) == 1){
            
            if($accountType=="student"){
                echo "login success";
                $_SESSION['kachaura'] = $username;
                header('Refresh:3;../student/home.php');
            }else if($accountType=="teacher"){
                echo "login success";
                 $_SESSION['kachaura'] = $username;
                header('Refresh:3;../teacher/home.php');
            }else{
                 $_SESSION['kachaura'] = $username;
                header('Refresh:3;../admin/home.php');
            }
        }
    }else{
        echo "You haven't clicked login buttin";
    }
?>