<?php

$email = $_POST['email'];
$password = $_POST['password'];
$feedback = $_POST['feedback'];

echo $email."<br>".$password."<br>".$feedback."<br>";

$con = mysqli_connect("localhost", "id11837298_root", "snehal23@2000", "id11837298_login");
if($con) {
    echo "connected successfully. <br>";
    echo "please wait while we shamlessly submit your data into our highly insecure database <br>";
    $sql = "INSERT INTO user_details VALUES ('$email', $password, '$feedback')";
    echo "The SQL query to submit details is ".$sql."<br> Please do it yourself next time, dont bother us.";
    $data = mysqli_query($con, $sql);
    echo "<br>".$data;
    // sleep(10);
    header("Location: http://127.0.0.1:8000/success.html"); /* Redirect browser */
}
else {
    die("connection insuccessful, dying.");
}


?>