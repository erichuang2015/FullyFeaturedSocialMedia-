<?php
ob_start(); // turns on output buffering
session_start();
$timezone = date_default_timezone_get("	Europe/Budapest");

$con = mysqli_connect("localhost", "root", "root", "realsocialmedia");
if(mysqli_connect_errno())
{
    echo "failed to connect:" . mysqli_connect_errno();
}