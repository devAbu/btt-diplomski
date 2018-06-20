<?php
session_start();
echo 'Logged out';
session_destroy();
header("location:index");
?>