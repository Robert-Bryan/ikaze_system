<?php
$db=new PDO('mysql:host=localhost;dbname=cat','root','');
if($db)
{
    echo"";
}
else{
    echo "Not Connect";
}

?>