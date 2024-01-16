<?php
    include 'dbconnect.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];
        $delete="DELETE FROM `STUDENT_DATABASE` WHERE S_no=$id";
        $result=mysqli_query($con,$delete);
        if($result){
            
            header('location:display.php');
            echo"Deleted Successfully";
        }
        else{
            echo"Sory data base Eroor".mysqli_connect_error($con);
        }
    }
?>
