<?php
if(isset($_POST['btn']))
{
    include "../database.php";// add  database
    $ntc=$_POST['nav'];
    $date= date("Y-m-d");

    $sql = "INSERT into nav (nav_name) values('$ntc')";
// echo $sql;
// die();
if(mysqli_query($conn,$sql))
{
    header('Location:index.html');
}
else
{
    echo "data not inserted";
}
die();
}
?>