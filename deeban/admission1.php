<?php
session_start();

$servername="localhost";
$username="root";
$password="";
$database_name="admission";

$conn = mysqli_connect($servername,$username,$password,$database_name);

if (!$conn) {
  die("Connection Error :" . mysqli_connect_error());
}
if(isset($_POST['submit'])) {

  $fullname = $_POST['fullname'];
  $dob = $_POST['dob'];
  $email_id = $_POST['email_id'];
  $phone_number = $_POST['phone_number'];
  $address = $_POST['address'];
  $pincode = $_POST['pincode'];
  $gender = $_POST['gender'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $country = $_POST['country'];
  $classx_percentage = $_POST['classx_percentage'];
  $classx_passing = $_POST['classx_passing'];
  $group1 = $_POST['group1'];
  $classxi_percentage = $_POST['classxi_percentage'];
  $classxi_passing = $_POST['classxi_passing'];
  $group2 = $_POST['group2'];
  $classxii_percentage = $_POST['classxii_percentage'];
  $classxii_passing = $_POST['classxii_passing'];
  $group3 = $_POST['group3'];
  $graduation_percentage = $_POST['graduation_percentage'];
  $graduation_passing = $_POST['graduation_passing'];
  $course = $_POST['course'];

  $sql_query = "INSERT INTO register (fullname,dob,email_id,phone_number,address,pincode,gender,city,state,country,classx_percentage,classx_passing,group1,classxi_percentage,classxi_passing,group2,classxii_percentage,classxii_passing,group3,graduation_percentage,graduation_passing,course) 
  VALUES ('$fullname','$dob','$email_id','$phone_number','$address','$pincode','$gender','$city','$state','$country','$classx_percentage','$classx_passing','$group1','$classxi_percentage','$classxi_passing','$group2','$classxii_percentage','$classxii_passing','$group3','$graduation_percentage','$graduation_passing','$course')";

  if (mysqli_query($conn, $sql_query)) {
    $_SESSION['status'] = "Sucessfull Registered!";
    header('location: admission.php');
  } else {
    echo "Error :" . $sql . "" . mysqli_error($conn);
  }
  mysqli_close($conn);
}
?>