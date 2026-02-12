<?php
session_start();
include "config/config.php";
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tricycle and Pedicab Regulatory Services</title>
    <link rel="stylesheet" href="assets/css/cssmain/index.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="icon" href="assets/icon/PSTMD.png" type="image/x-icon">
    <script src="assets/js/sweetalert2/sweetalert2.all.min.js"></script>

</head>
<body>

    <div class="login-container">
        <div class="logo-header">
            <img src="assets/img/caloocanlogo.png" alt="CaloocanLogo" class="logo">
            <img src="assets/img/amlogo.png" alt="AMLogo" class="logo">
            <img src="assets/icon/PSTMD.png" alt="PSTMDlogo" class="logo">
            <img src="assets/img/bagongpilipinas.png" alt="BAGONGPHLogo" class="logo">
        </div>

        <div class="login-card">
            <div class="login-header">
                <h2>TPRS</h2>
                <p>Tricycle and Pedicab Regulatory Services</p>
            </div>

            <form class="login-form" id="loginForm"  method="POST">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <div class="input-wrapper">
                        <input type="text" id="username" name="username" required>
                    </div>
                    <span class="error-message" id="emailError"></span>
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <div class="input-wrapper">
                        <input type="password" id="password" name="password" required>
                    </div>
                     <span class="error-message" id="passwordError"></span>
                </div>
                 <button type="submit" class="login-btn" id="loginsubmit">
                <span class="btn-text">Login</span>
                <span class="btn-loader"></span>
            </button>
            </form>
        </div>
        <footer class="footer-text">JARRELL DC - ITDO Caloocan &copy; 2026</footer>
    </div>

<script src="assets/js/sweetalert2/sweetalert2.all.min.js"></script>
<script src="assets/js/jquery-4.0.0.min.js"></script>
<script src="assets/js/ajax/logindex.js"></script>

    </body>
</html>