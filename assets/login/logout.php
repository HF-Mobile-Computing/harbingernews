<?php
session_start();
include 'sessions.php';
logout();
echo 'you\'ve been logged out.';
?>