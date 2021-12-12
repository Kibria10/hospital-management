<?php 
session_start();
header('location:../view/login.php');
$conn = mysqli_connect("localhost", "root", "");

if($conn){
    echo "Connection Successful";
}else{
    echo "No Connection";
}
mysqli_select_db($conn,'hospitalmanagement');

$pname = $_POST['pname'];
$email = $_POST['email'];
$password = $_POST['password'];
$phoneno = $_POST['phoneno'];
$address= $_POST['address'];
$gender= $_POST['gender'];
$age= $_POST['age'];
$dob= $_POST['dob'];


print_r($pname);
print_r($email);
print_r($password);





// $s = "select * from patientdata where email = '$email'";
// $result = mysqli_query($conn, $s);
// $num = mysqli_num_rows($result);

// if($num == 1){
//     header('location:login.php');
// }
// else{
$sql= "INSERT INTO patientdata (pname, email, password, phoneno, address, gender, age, dob) VALUES ('$pname','$email','$password', '$phoneno', '$address', '$gender', '$age', '$dob')";
// }

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } 
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

?>