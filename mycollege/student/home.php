<?php
    session_start();
    if(isset($_SESSION['kachaura'])){
        $username = $_SESSION['kachaura'];
    }else{
        header('Location:../login.html');
    }
?>
<?php include "templates/header.php";?>
 <?php echo "welcome $username";?>

<?php include "templates/footer.php";?>