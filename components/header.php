<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Blood Bank</title>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid container">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="request.php">Request Blood</a></li>
                        <li><a href="search.php">Active Donors</a></li>
                        <li><a href="check_requests.php">Check Requests</a></li>
                        <li><a href="profile.php?id=<?php echo base64_encode($_SESSION['login_user']); ?>">Update
                                Profile</a></li>
                        <li><a href="about.php">Our Mission</a></li>
                    </ul>
                </li>
            </ul>
            <span class="navbar-brand logo"><a href="about.php">Blood Bank</a></span>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['login_user'])) {
                    $name = $_SESSION['login_user'];
                    $encode = base64_encode($name);
                    echo "<li><a href=\"profile.php?id=$encode\"> Welcome, $name </a></li>";
                    echo "<li><a href=\"classes/logout.php\">Logout</a></li>";
                } else {
                    $str = "<li>
                                    <a href=\"index.php\">
                                        <span class=\"glyphicon glyphicon-user\"></span> Sign Up
                                    </a>
                                </li>
                                <li>
                                <a href=\"index.php\">
                                        <span class=\"glyphicon glyphicon-log-in\"></span> Login
                                    </a>
                                </li>";

                    echo $str;
                }
                ?>
            </ul>
        </div>
    </nav>