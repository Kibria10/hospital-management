<?php
include('../model/db.php');
session_start(); 

 $error="";

if (isset($_POST['submit'])) {
if (empty($_POST['email']) || empty($_POST['password'])) {
$error = "Email does not exist or Password is invalid";
}
else
{
$email=$_POST['email'];
$password=$_POST['password'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"pharmacistdata",$email,$password);

if ($userQuery->num_rows > 0) {
 
  $_SESSION['email']=$_POST['email'];
  $_SESSION['password']=$_POST['password'];
   }
 else {
$error = "Email does not exist or Password is invalid";
}
$connection->CloseCon($conobj);

}
/*if (isset($_POST['submit'])){
    $connection = new db();
    $conobj=$connection->OpenCon();
    $userQuery=$connection->ShowAll($conobj,'doctordata');

    echo "<table><tr><th>Doctor ID</th><th> Doctor Name</th><th>Email</th><th>Age</th><th>Phone Number</th><th>Speciality</th></tr>";

    while($row = $userQuery->fetch_assoc()) {

      echo "<tr><td>".$row["id"]."</td><td>".$row["dname"]."</td><td>".$row["email"]."</td><td>".$row["age"]."</td><td>".$row["phoneno"]."</td><td>".$row["speciality"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }*/

}






?>