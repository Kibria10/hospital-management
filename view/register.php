<?php

include('../model/db.php');
?>

<head>
  <link rel="stylesheet" href="../css/style.css">
</head>
<form action="../control/registerValidation.php" method = "post">
  <div>
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    
    <div>
    <label for="pname"><b>Patient Name</b></label>
    <input type="text" placeholder="Enter Username" name="pname" required>
    <div>


    <div>
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Username" name="email" required>
    <div>

    <div>
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    </div>

    <div>
    <label for="phoneno"><b>Phone No.</b></label>
    <input type="text" placeholder="Enter Phone no." name="phoneno" required>
    <div>

    <div>
    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" required>
    <div>

    <div>
    <label for="gender"> <b>Select you gender</b></label>
<select name="gender">
	<option value="none" selected>Gender</option>
	<option value="male">Male</option>
	<option value="female">Female</option>
	<option value="other">other</option>
</select>
    <div>

    <div>
    <label for="age"><b>Age</b></label>
    <input type="number" placeholder="Enter Age" name="age" required>
    <div>

    <div>
    <label for="dob"><b>Date of Birth</b></label>
    <input type="date" placeholder="Enter Date of Birth" name="dob" required>
    <div>

    
          
    

    <button type="submit" >Register</button>

</form>

<div>
    <p>Already have an account? <a href="login.php" class="button">Sign in</a>.</p>
</div>

