<?php      
    $con = mysqli_connect('localhost', 'root', '','db_signup');
    if($con){
       // echo "Connection Successfull";
    }else{
      //  echo "No connection";
    }

    $email= $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $email= stripcslashes($email);  
        $password = stripcslashes($password);  
        $email= mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from tbl_signup where fldEmail= '$email' and fldPassword = '$password'";  
        $result = mysqli_query($con, $sql);  
       $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
           echo '<script>alert("Login Successfully, Now You are able to contact us..")</script>';
        
           // header("Location: dashboard.php");
        }  
        else{  
            echo '<script> alert("Login failed. Invalid email or password.")</script>';
            //header("Location: login.php");
            
        }     
?>  