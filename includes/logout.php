<?php
session_start();
ob_start();

$_SESSION['username'] = null;
$_SESSION['user_password'] = null;
header("Location: ../index.php");