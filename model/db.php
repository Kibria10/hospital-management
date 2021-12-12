<?php
class db{
//1
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "hospitalmanagement";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
 return $conn;
 }
 //2
 function CheckUser($conn,$table,$email,$password)
 {
$result = $conn->query("SELECT * FROM ".$table." WHERE email='".$email."' AND password='".$password."'");
 return $result;
 }
//3
 function InsertValue($conn, $table, $dname, $email, $password, $age, $phoneno, $speciality){
     $result=$conn->query("INSERT INTO ".$table." (`dname`,`email`,`password`,`age`,`phoneno`,`speciality`) values ('$dname','$email','$password','$age','$phoneno','$speciality')");
     return $result;
 }
//4
 function InsertPharma($conn, $table, $medname, $company, $expdate, $batch)
 {
     $result =$conn->query("INSERT INTO $table (`medname`, `company`, `expdate`, `batch`) VALUES ('$medname','$company','$expdate','$batch') ");
     return $result;
}
//5
 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }
//6
function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>