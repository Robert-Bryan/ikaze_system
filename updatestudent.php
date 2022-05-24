<?php
include('connection.php');
?>
<html><head><title>UPDATE</title></head>
<body>
    <div id="full">
        <div id="header"><h2>IKAZE TUMBA SYSTEM</h2></div>
        <br><br><br><br>
<?php
if(isset($_GET['std_id']))
{
    $std=$_GET['std_id'];
    $query = "SELECT * FROM student WHERE id=:std_id";
    $statement = $q->prepare($query);
    $data = [':std_id' => $std];
    $statement->execute($data);
     
    $res = $statement->fetch(PDO::FETCH_OBJ);
}

?>

    <form action="" method="post">
    <table>
            <tr>
            <td width="100px " height="50px"><b><input type="text" name="std_id"  value="<?= $res->std_id; ?>"></b></td>
                <td width="100px " height="50px"><b>Enter your First Name</b></td>
                <td width="100px " height="50px"><b><input type="text" name="first_name"  value="<?= $res->first_name; ?>"></b></td>
              
                <td width="100px " height="50px"><b>Enter your Last Name</b></td>
                <td width="100px " height="50px"><b><input type="text" name="last_name" value="<?= $res->last_name; ?>></b></td>
                <td width="100px " height="50px"><b>Enter your Gender</b></td>
                <td width="100px " height="50px"><b><input type="radio" name="gender" value="<?= $res->gender; ?>>Male</b>
                <input type="radio" name="gender" value="female">Female</b></td>
                <td width="100px " height="50px"><b>Enter your Phone Number</b></td>
                <td width="100px " height="50px"><b><input type="text" name="phone_number" value="<?= $res->phone_number; ?>></b></td>
               
                <td width="100px " height="50px"><b>Enter your Reg Number</b></td>
                <td width="100px " height="50px"><b><input type="text" name="reg_number" value="<?= $res->reg_number; ?>></b></td>
              
                <td width="100px " height="50px"><b>Enter your  Email</b></td>
                <td width="100px " height="50px"><b><input type="text" name="email" value="<?= $res->email; ?>></b></td>
               
                <td width="100px " height="50px"><b>Enter your Department</b></td>
                <td width="100px " height="50px"><b><input type="text" name="department" value="<?= $res->department; ?>></b></td>
               
                <td width="100px " height="50px"><b>Enter your Guardian</b></td>
                <td width="100px " height="50px"><b><input type="text" name="guardian" value="<?= $res->guardian; ?>></b></td>
               
                <td width="100px " height="50px"><b>Enter your Guardian Phone</b></td>
                <td width="100px " height="50px"><b><input type="text" name="phone" value="<?= $res->phone; ?>></b></td>
               
                <td width="100px " height="50px"><b><input type="submit"  value="UPDATE"></b></td></tr>
</table>
    
    </form>

    </div>
    