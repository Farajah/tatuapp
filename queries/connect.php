<?php
//create a connection
$conn = new mysqli("localhost", "root", "", "matatudb",3306);

//check connection
if($conn -> connect_error)
{
    die("Not connected".$conn -> connect_error);
}
//create database query
$sql= "CREATE DATABASE matatudb";
$conn -> query($sql)
?>