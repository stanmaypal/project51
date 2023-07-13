<?php
if(isset($_POST['btn']))
{
    include "../database.php";// add  database
    $head=$_POST['head'];
    $cnt=$_POST['cnt'];

    echo $head."<br>";  
    echo $cnt."<br>";
   // echo $phone."<br>";

    $filename = $_FILES["mimg"]["name"];
    $tempname = $_FILES["mimg"]["tmp_name"];
    $folder = "./img/" . $filename;
    move_uploaded_file($tempname, $folder); 

    
    $sql = "INSERT into slider (image,head,content) values('$filename','$head','$cnt')";
// echo $sql;
// die();
if(mysqli_query($conn,$sql))
{
   // echo" data inserted successfully";
    //header('Location:from.php');
    header('Location:index.html');
}
else
{
    echo "data not inserted";
}
die();
}
?>