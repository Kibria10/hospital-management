<?php
class db{
//1
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "hospitalmanagementsystem";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
 return $conn;
 }
 //Admin
    function CheckAdmin($conn,$table,$email,$password)
    {
        $result = $conn->query("SELECT * FROM ".$table." WHERE email='".$email."' AND password='".$password."'");
        return $result;
    }
 //1
    function CheckPatient($conn,$table,$email,$password)
    {
        $result = $conn->query("SELECT * FROM ".$table." WHERE email='".$email."' AND password='".$password."'");
        return $result;
    }
 //2
 function CheckUser($conn,$table,$email,$password)
 {
$result = $conn->query("SELECT * FROM ".$table." WHERE email='".$email."' AND password='".$password."'");
 return $result;
 }

//3
 function InsertPharma($conn, $table, $medname, $company, $expdate, $batch)
 {
     $result =$conn->query("INSERT INTO $table (`medname`, `company`, `expdate`, `batch`) VALUES ('$medname','$company','$expdate','$batch') ");
     return $result;
}
//4
function InsertPatient($conn, $table, $pname, $email, $password,  $phoneno, $address, $gender,$age, $dob){
    $result=$conn->query("INSERT INTO $table (`pname`,`email`,`password`,`phoneno`,`address`,`gender`,`age`,`dob`) VALUES ('$pname','$email','$password','$phoneno','$address','$gender','$age','$dob')");
        return $result;
    }
//5
 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }
//6
    function viewAll($conn,$table)
    {
        $result = $conn->query("SELECT * FROM  $table");
        return $result;
    }
    //7
function CloseCon($conn)
 {
 $conn -> close();
 }
//8
public function insertAppointment($conn, $table, $time, $description, $patient_id, $doctor_id){

    $result =$conn->query("INSERT INTO $table (`time`,`description`,`patient_id`, `doctor_id`) VALUES ('$time','$description','$patient_id', '$doctor_id') ");
    return $result;
}


}


//9
function getPatientIdandName()
{
    if (!isset($_SESSION['email'])) {
        echo 'Welcome Guest.';
    } else {
        $temp = $_SESSION['email'];
        $sql = "SELECT * FROM patientdata WHERE email = '$temp'";
        $connection = new db();
        $conobj = $connection->OpenCon();
        $result = mysqli_query($conobj, $sql);
        while ($row = mysqli_fetch_array($result)) {
            $patient_id = $row["id"];
            $patient_name = $row["pname"];
            $nameAndId=array($patient_id, $patient_name);
        }

    }
    return $nameAndId;
}


?>