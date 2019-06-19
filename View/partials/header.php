<?php 
$url = "$_SERVER[REQUEST_URI]";
require_once '../../init.php';
require_once '../../App/modal/Checked.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Colors">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>BANK-smksaba</title>
    <!-- Favicon -->
    <link rel="icon" href="../../Public/bg/icon-1.png">
    <?php include 'css.php'; ?>

</head>

<body>
    <div class="page-wrapper">

        <!-- ###### Layout Container Area ###### -->
        <div class="layout-container-area">

            <!-- Side Menu Area -->
            <div class="side-menu-area">

                <div class="logo-bar">
                    <!-- logo -->
                    <a href="../../" class="logo">
                        <span class="big-logo">
                            <img src="../../Public/bg/icon-2.png" alt="">
                        </span>
                        <span class="small-logo">
                            <img src="../../Public/bg/icon-1.png" alt="">
                        </span>
                    </a>
                </div>

                <!-- sidebar menu -->
                <?php require_once 'menu.php'; ?>
            </div>

            <!-- Layout Container -->
            <div class="layout-container sidemenu-container">

                <!-- ***** Page Top Bar Area ***** -->
                <div class="page-top-bar-area d-flex align-items-center justify-content-between">

                    <div class="logo-trigger-search-area d-flex align-items-center">
                        <!-- Logo Trigger -->
                        <div class="logo-trigger-area d-flex align-items-center">
                            <!-- Trigger -->
                            <div class="top-trigger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>

                    <!-- User Meta -->
                    <div class="user-meta-data d-flex align-items-center">
                        <!-- Notifications -->

                        <!-- Profile -->
                        <div class="topbar-profile">
                            <!-- Thumb -->
                            <div class="user---thumb">
                                <img src="../../Public/img/member-img/women.jpg" alt="">
                                <p>User<i class="fa fa-angle-down"></i></p>
                            </div>

                            <!-- Profile Data -->
                            <div class="profile-data">
                                <!-- Profile User Details -->
                                <div class="profile-user--details" style="background-image: url(../../Public/bg/neonzippo.png);">
                                    <!-- Thumb -->
                                    <!-- <div class="profile---thumb-det">
                                         
                                    </div> -->
                                    <!-- Profile Text -->
                                    <div class="profile---text-details">
                                        <h6>User</h6>
                                        <a href="dashboard-1.html"></a>
                                    </div>
                                </div>
                                <?php if (isset($_SESSION['admin'])): ?>
                                    
                                <?php elseif (isset($_SESSION['member'])): ?>
                                    
                                <?php else: ?>    
                                    <!-- Profile List Data -->
                                    <a class="profile-list--data" href="../siswa/profilSiswa">
                                        <!-- Profile icon -->
                                        <div class="profile--list-icon">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </div>
                                        <!-- Profile Text -->
                                        <div class="notification--list-body-text profile">
                                            <h6 onclick="">My profile</h6>
                                        </div>
                                    </a>
                                <?php endif ?>

                                <!-- Profile List Data -->
                                <a class="profile-list--data" href="../../App/modal/Validate.php?aksi1=logout">
                                    <!-- Profile icon -->
                                    <div class="profile--list-icon">
                                        <i class="fa fa-sign-out text-danger" aria-hidden="true"></i>
                                    </div>
                                    <!-- Profile Text -->
                                    <div class="notification--list-body-text profile">
                                        <h6>Sign-out</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>