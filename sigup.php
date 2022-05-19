<?php

$connection = mysqli_connect('localhost','root');

if($connection) {
    echo "connection is established";
}

else {
    echo "error in connection";
}

mysqli_select_db($connection,'webtech_signup');
$first_n = $_POST['u_name'];
$secn = $_POST['email'];
$thirdn = md5(($_POST['pass']));
$fouthn = md5(($_POST['pass_c']));

$data = "INSERT INTO signup (USER_NAME,EMAIL,PASS_WRD,PASS_WRD_C) VALUES('$first_n','$secn','$thirdn','$fouthn')";

mysqli_query ($connection,$data);
header('location:lg1.php');
?>