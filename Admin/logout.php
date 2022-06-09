<?php
session_start();
unset($_SESSION['admin_login']);
unset($_SESSION['successMessage']);
header("location: ../admin_login.html");