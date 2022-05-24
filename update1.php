<?php
require 'connection.php';
if (isset ($_POST['first_name'])  && isset($_POST['last_name']) && isset($_POST['gender']) && isset($_POST['phone_number']) && isset($_POST['reg_number']) && isset($_POST['email']) && isset($_POST['department']) && isset($_POST['guardian']) && isset($_POST['phone']) ) {
  $fname = $_POST['first_name'];
  $lname = $_POST['last_name'];
  $gender = $_POST['gender'];
  $phone = $_POST['phone_number'];
  $number = $_POST['reg_number'];
  $email = $_POST['email'];
  $department = $_POST['department'];
  $guardian = $_POST['guardian'];
  $phoneg = $_POST['phone'];
  $std_id = $_POST['std_id'];
  $sql = 'UPDATE student SET first_name=:first_name, last_name=:last_name, gender=:gender, phone_number=:phone_number, reg_number=:reg_number, email=:email, department=:department=, guardian=:guardian, phone=:phone WHERE std_id=:std_id';
  $statement = $db->prepare($sql);
  if ($statement->execute([':first_name' => $fname, ':last_name' => $lname, ':gender' => $gender, ':phone_number' => $phone, ':reg_number' => $number, ':email' => $email, ':department' => $department, ':guardian' => $guardian, ':phone' =>$phoneg, ':std_id' => $std_id])) {
    header("Location: /crud");
  }
  else{
      echo" update not";
  }



}
?>