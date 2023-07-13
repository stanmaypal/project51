<?php
$host="localhost";
$user="root";
$pass="";
$dbname="project51";
$conn=mysqli_connect($host,$user,$pass,$dbname);
if(!$conn)
{
    die("connection failled!!!");
}

?>