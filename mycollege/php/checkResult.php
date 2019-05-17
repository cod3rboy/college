<?php
    if(isset($_POST['btnStatus']) || isset($_POST['txtSymbolNo'])){
        $symbolno= $_POST['txtSymbolNo'];
       
        
        //Connect to Database
        include "connect.php";
        
        $sql = "SELECT * from result where SymblNO='$symbolno'";
        $result = mysql_query($sql);
    
        if(mysql_num_rows($result) == 1){
            echo "you have pass";
        }else{
            echo "you have fail";
        }
    }else
    {
        echo "please click on check result";
    }
?>