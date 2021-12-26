<?php
include('../model/db.php');
//session_start();

$pname=$email=$password=$phoneno=$address=$gender=$age=$dob="";

$insert ="";
$error = "";

if (isset($_POST["submit"])) {

    $pname = $_REQUEST["pname"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    $phoneno = $_REQUEST["phoneno"];
    $address = $_REQUEST["address"];
    $gender = $_REQUEST["gender"];
    $age = $_REQUEST["age"];
    $dob = $_REQUEST["dob"];
    $connection = new db();
    $conobj = $connection->OpenCon();

    $insert = $connection->InsertPatient($conobj, "patientdata", $pname, $email, $password, $phoneno,$address,$gender,$age,$dob);

    if($insert == true)
        $insert = "inserted successfully";
    else{
        echo "failed to store your appointment data. something went wrong.";

    }

    $connection->CloseCon($conobj);
}
?>