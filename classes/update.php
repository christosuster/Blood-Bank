<?php
include "dbconnect.php";
session_start();
if (isset($_POST['submit'])) {
    $fname = (isset($_POST['fname'])) ? $_POST['fname'] : "";
    $lname = (isset($_POST['lname'])) ? $_POST['lname'] : "";
    $address = (isset($_POST['address'])) ? $_POST['address'] : "";
    $gender = (isset($_POST['gender'])) ? $_POST['gender'] : "";
    $country = (isset($_POST['country'])) ? $_POST['country'] : "";
    $contact = (isset($_POST['contact'])) ? $_POST['contact'] : "";
    $bgroup = (isset($_POST['bgroup'])) ? $_POST['bgroup'] : "";
    $active = (isset($_POST['active'])) ? $_POST['active'] : "";
    $email = (isset($_POST['uname'])) ? $_POST['uname'] : "";
    $division = (isset($_POST['division'])) ? $_POST['division'] : "";
    $city = (isset($_POST['city'])) ? $_POST['city'] : "";

    $sql = "UPDATE `users` SET `fname`= '$fname',`lname`='$lname',
                `address`='$address',`city`='$city',`division`='$division',`gender`='$gender',`country`='$country',
                `contact`='$contact',`bgroup`='$bgroup',`active`= '$active' WHERE username = '$email'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $enode = base64_encode($email);
        header("Location:../profile.php?id=$enode");
    } else {
        header('Location:../');
    }
}
?>