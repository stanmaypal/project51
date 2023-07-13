<?php
if(isset($_POST['user']) && isset($_POST['pass'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];
// echo $username;
// echo $password;

    // TODO: Validate username and password

    // Connect to database
  include 'database.php';

    // Check if user exists
    $query = "SELECT * FROM log WHERE user = '$username' ";
//    echo $query;
// die();
    $result = mysqli_query($conn,$query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        // //echo "Hello ";
        // echo $password;
        // echo $user['password'];
        // die();

        // Verify password
        if ($password== $user['password']) {

            header("Location: admin/index.html");

        } else {
            // Password is incorrect
            echo "Invalid username or password";
        }
    } else {
        // User not found
        echo "Invalid username or password";
    }

   
}
?>