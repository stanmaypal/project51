<?php
if(isset($_POST['btn']))
{
    include "../database.php";// add  database
    $ntc=$_POST['ntc'];
    $date= date("Y-m-d");

    $sql = "INSERT into natice (ntc_name,ntc_date) values('$ntc','$date')";
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