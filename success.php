<?php
$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$dob = $_GET['dob'];
$gender = $_GET['gender'];

echo "
<div style='font-family: Arial, sans-serif; max-width: 600px; margin: 50px auto; padding: 20px; background:lightgreen; border-radius: 5px;box-shadow:0 0 10px rgba(0,0,0,0.2);border-color:black;text-align:center;'>
    <h1>Registration Successful!!</h1>
    <p><strong>Name:</strong> $name</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Phone:</strong> $phone</p>
    <p><strong>Date of Birth:</strong> $dob</p>
    <p><strong>Gender:</strong> $gender</p>
</div>
";
?>