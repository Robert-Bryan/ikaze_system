<?php
include('connection.php');
session_start();
require('header.php')
?>
<html><head><title>Admin Homepage</title></head>
<body>
    <div id="full">
        <div id="header"><h2>IKAZE TUMBA SYSTEM</h2></div>
        <div id="main-wrapper">

        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="navigation">
                            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">RECORD</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">REPORT</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="selectstudent.php">LIST</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="signin-btn">
                                    <a class="btn btn-primary" href="index.html" target="_blank">Log out</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <?php
        $user=$_SESSION['user'];
        if(!$user)
        {
            header("Location:login.php");
        }
        
        ?>


</body></html>