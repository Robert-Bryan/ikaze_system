<?php
include('connection.php');
?>
<html>
    <head>
        <title>RECORD</title>
        <link rel="icon" type="image/png" sizes="16x16" href="images/logo.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="bootstrap/css/style.css">
</head>
    </head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
<div class="intro" id="home">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 text-center">
                        <div class="intro-content">
                            <h1>IKAZE <strong class="text-primary">Tumba</strong>. </h1>
        <form method="post" role="form">
            <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-4">
        <input type="email" class="form-control" id="email" placeholder="Enter email">
      </div>
    </div>


        <table>
            <tr>
                <td width="100px " height="50px"><b>Enter your First Name</b></td>
                <td width="100px " height="50px"><b><input type="text" name="first_name" ></b></td></tr>
                <tr>
                <td width="100px " height="50px"><b>Enter your Last Name</b></td>
                <td width="100px " height="50px"><b><input type="text" name="last_name"></b></td></tr>
                <tr>
                <td width="100px " height="50px"><b>Enter your Gender</b></td>
                <td width="100px " height="50px"><b><input type="radio" name="gender" value="male">Male</b>
                <input type="radio" name="gender" value="female">Female</b></td></tr>
                <tr>
                <td width="100px " height="50px"><b>Enter your Phone Number</b></td>
                <td width="100px " height="50px"><b><input type="text" name="phone_number"></b></td></tr>
                <tr>
                <td width="100px " height="50px"><b>Enter your Reg Number</b></td>
                <td width="100px " height="50px"><b><input type="text" name="reg_number"></b></td></tr>
                <tr>
                <td width="100px " height="50px"><b>Enter your  Email</b></td>
                <td width="100px " height="50px"><b><input type="text" name="email"></b></td></tr>
                <tr>
                <td width="100px " height="50px"><b>Enter your Department</b></td>
                <td width="100px " height="50px"><b><input type="text" name="department"></b></td></tr>
                <tr>
                <td width="100px " height="50px"><b>Enter your Guardian</b></td>
                <td width="100px " height="50px"><b><input type="text" name="guardian"></b></td></tr>
                <tr>
                <td width="100px " height="50px"><b>Enter your Guardian Phone</b></td>
                <td width="100px " height="50px"><b><input type="text" name="phone"></b></td></tr>
                <tr>
                <td width="100px " height="50px"><input type="submit" name="sub" value="Send"></td></tr>
</table>
</div>
</form>

<?php
if(isset($_POST['sub']))
{
    
    $first=$_POST['first_name'];
    $last=$_POST['last_name'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone_number'];
    $number=$_POST['reg_number'];
    $email=$_POST['email'];
    $department=$_POST['department'];
    $guardian=$_POST['guardian'];
    $phoneg=$_POST['phone'];
    $q=$db->prepare("INSERT INTO student (first_name,last_name,gender,phone_number,reg_number,email,department,guardian,phone) VALUES 
    (:first_name,:last_name,:gender,:phone_number,:reg_number,:email,:department,:guardian,:phone)");
    $q->bindValue('first_name',$first);
    $q->bindValue('last_name',$last);
    $q->bindValue('gender',$gender);
    $q->bindValue('phone_number',$phone);
    $q->bindValue('reg_number',$number);
    $q->bindValue('email',$email);
    $q->bindValue('department',$department);
    $q->bindValue('guardian',$guardian);
    $q->bindValue('phone',$phoneg);
    if($q->execute())
    {
        echo "THANK YOU FOR YOUR RECORD";
    }
else
{
    echo "DATA ARE NOT INSERT";
}
    
}

?>
</body>
</html>