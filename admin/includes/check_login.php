<?php

include('./includes/helper.php');
session_start();

if(!isset($_SESSION['admin']))
{
    header('location:'.url('login.php'));
    die();
}