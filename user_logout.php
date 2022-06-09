<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['successMessage']);
header("location: user_signin.html");