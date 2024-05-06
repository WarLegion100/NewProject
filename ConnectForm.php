<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$status=$_POST['status'];
$email=$_POST['email'];
$password=$_POST['password'];

$connect=new mysqli('localhost', 'root', '', 'contactus');
if($connect->connect_error){
    die('Connection Failed : '.$connect->connect_error);
}
else{
    $show=$connect->prepare("insert into form(fname, lname, dob, gender, status, email, password) values(?, ?, ?, ?, ?, ?, ?)");
    $show->bind_param("sssssss", $fname, $lname, $dob, $gender, $status, $email, $password);
    $show->execute();
    echo "Registration Successful";
    $show->close();
    $connect->close();
}
?>