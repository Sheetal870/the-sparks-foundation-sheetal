<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_signup');
if($con){
  //  echo "Connection Successfull";
}else{
    //echo "No connection";
}

// get the post records

$name = $_POST['name'];
$email = $_POST['email'];
$state = $_POST['state'];
$password = $_POST["password"];




// database insert SQL code
$sql = "INSERT INTO `tbl_signup` (`fldName`, `fldEmail`, `fldState`, `fldPassword`) VALUES ( '$name', '$email', '$state', '$password')";

 // insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
    echo '<script>alert("You are successfully Register Yourself.")</script>';
    //header("Location: login.php");
}else{
    echo '<script>alert("Registration Failed. Invalid Credential.")</script>';
}


?>


























