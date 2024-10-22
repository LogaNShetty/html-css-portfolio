<?php
$host="localhost";
$username="root";
$password="rootbca123";
$database="mini_project";

$conn=new mysqli($host,$username,$password,$database);
if($conn->connect_error){
    die("connection failed...".$conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];
    $message=$_POST["message"];

    $sql="INSERT INTO contact_form(name,email,phone,address,message)VALUES('$name','$email','$phone','$address','$message')";
    if($conn->query($sql)==TRUE){
        echo '<div style="border: 2px solid #4CAF50; padding: 20px; margin: 20px 0; font-family: \'Bree Serif\', serif; background-color: #f9f9f9; color: #333; font-size: 18px; text-align: center;">FEEDBACK SUBMITTED SUCCESSFULLY!!</div><br>';
    } else {
        echo '<div style="border: 2px solid #FF0000; padding: 20px; margin: 20px 0; font-family: \'Bree Serif\', serif; background-color: #f9f9f9; color: #333; font-size: 18px; text-align: center;">Error: '.$sql.'<br>'.$conn->error.'</div>';
    }
}

$conn->close();

