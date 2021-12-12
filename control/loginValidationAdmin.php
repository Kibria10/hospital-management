<?php 
session_start();

$conn = mysqli_connect("localhost", "root", "");

if($conn){
    echo "Connection success";
}else{
    echo " NoConnection";
}

mysqli_select_db($conn,'hospitalmanagement');

$email = $_POST['email'];
$password = $_POST['password'];
// $message = $_POST['message'];

$s = "select * from admindata where email = '$email' && password = '$password' ";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

if($num == 1){
 $_SESSION['email'] = $email;
   header('location:admin.php');

}
else{
    header('location:error.php');
}

?>