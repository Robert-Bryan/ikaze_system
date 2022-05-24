<?php
include('connection.php');
require('header.php');
session_start();
?>
<html>
    <head>
        <title>Admin Login</title></head>
<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
<body>
<div class="card-mt5">
    <form action="" method="post" role="form">
        <table>
            <tr> 
                <td width="50px " height="50px"><b>Enter your Username</b></td>
                <td width="100px " height="50px"><b>   
                <input type="text" name="user" placeholder="Enter Username"></b></td>
            </tr>
                <tr>
                <td width="100px " height="50px"><b>Enter your Password</b></td>
                <td width="100px " height="50px"><b><input type="password" name="pass" placeholder="Enter Password"></b></td></tr>
                <tr>
               <td width="100px " height="50px"><b><input type="submit" name="sub" value="Login"></b></td></tr>
            </div>
        </div>
</table>
</form>
</div>
<?php
if(isset($_POST['sub']))
{
     $user=$_POST['user'];
     $pass=$_POST['pass'];
     $q=$db->prepare("SELECT * FROM admin where username='$user' && password='$pass'");
     $q->execute();
     $res=$q->fetchAll(PDO::FETCH_OBJ);
     if($res)
     {
         $_SESSION['user']=$user;
         header("Location:adminhome.php");
    } 
    else{
        echo "Unknown user";
    }
}
?>
</body>
</html>