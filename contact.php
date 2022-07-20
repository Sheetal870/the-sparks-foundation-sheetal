<?php
try{
    $db = new mysqli("localhost", "root", "" , "db_signup" );

}catch (Exception $exc){
    echo $exc->getTraceAsString();

}

if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && $_POST['concern']){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $concern  = $_POST['concern'];
    echo "$name";
    echo "$phone";
    echo "$email";
    echo "$concern";
    $is_insert = $db->query("INSERT INTO `tbl_contactus`(`fldName`, `fldPhone`, `fldEmail`, `fldConcern`) VALUES
     ('$name','$phone','$email','$concern')");
     
    if($is_insert == TRUE){
        echo "<h2>Thanks, Your concern submitted</h2>";
      
    }
}

?>
