<?php
    session_start();
    if(!isset($_SESSION['login_user']))
    header("Location:/bb/index.php");

    include "classes/dbconnect.php";
    $id = $_GET['id'];

    $sql = "DELETE FROM request WHERE id='$id'";
    $result = mysqli_query($con,$sql);
    if(! $result ) {
        header('Location:../error.php');
    }

    if($result)
    {
    mysqli_close($con); 
    header("location:check_requests.php"); 
    exit;	
    }
    
?>