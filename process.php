<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);

    header('Location: success.php?name='.$name.'&email='.$email.'&phone='.$phone.'&dob='.$dob.'&gender='.$gender);
    exit;
}
?>
