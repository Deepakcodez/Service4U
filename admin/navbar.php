<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Service4U</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="assets/counter.css">

    <link rel="stylesheet" href="assets/style1.css">
</head>

<body>



    <div class="container-fluid bg-light navheight py-2 ">
        <div class="row ">
            <div class="col ">
                <nav class="d-flex justify-content-between
                        align-items-center navbar ">
                    <div class="nav-logo">
                        <a href="../index.php"> <img src="assets/img/logo-s4u.png" alt="logo"></a>
                    </div>

                    <?php 
                            if(isset($_SESSION) &&isset($_SESSION['user'])){
                                echo '
                                <div class="nav-list d-flex list-unstyled gap-4 ">
                        <li><a href="showusers.php" class="text-decoration-none
                                    text-dark"> Users</a></li>
                        <li><a href="partners.php" class="text-decoration-none
                                    text-dark">Partners</a></li>
                        <li><a href="requests.php" class="text-decoration-none
                                    text-dark ">Requests</a></li>
                    </div>
                    <button class="btn btn-success register"> <a href="logout.php">Logout</a> </button>

                                ';
                            }else{
                                echo '
                                <button class="btn btn-success register"> <a href="indexadmin.php">Login</a> </button>

                                    ';
                            }
                        ?>


                   

                    <nav class="bar"><i class="fa-solid fa-bars" style="color: #000000;"></i></nav>
                </nav>
                <div class="dropdown list-unstyled d-none">
                    <div class="dropmenu">
                        <?php
                    if(isset($_SESSION) &&isset($_SESSION['user'])){
                                echo '
                        <li><a href="showusers.php" class="text-decoration-none
                                    ">Users</a></li>
                        <li><a href="partner.php" class="text-decoration-none
                                    ">Partners</a></li>
                        <li><a href="requests.php" class="text-decoration-none
                                     ">Requests</a></li>
                     
                                <a href="logout.php"><button class="btn btn-success registerdropreg "> Logout </button></a>

                                ';
                            }else{
                                echo '
                                <a href="signup.php"><button class="btn btn-success register dropreg">Register </button></a>

                                    ';
                            }
        ?>                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- navbar  -->