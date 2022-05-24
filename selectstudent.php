<?php
include('connection.php');
require('header.php');
?>
<html><head><title>RECORD</title></head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
    <div id="full">
        <br><br><br><br>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="navigation">
                            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">RECORD</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">REPORT</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="selectstudent.php">LIST</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="signin-btn">
                                    <a class="btn btn-primary" href="logout.php" target="_blank">Log out</a>
                                </div>
                            </nav>
                        </div>
                    </div>
            
            </div>
        </div>
        <form method="post">
            <div class="card-body">
            <div class="col-8 text-center ">
        <table class="table table-hover" width="200">
            <tr>
                <td width="30px " height="10px"><b>FIRST NAME</b></td>
                <td width="30px " height="10px"><b>ID</b></td>
                <td width="30px " height="10px"><b>LAST NAME</b></td>
                <td width="30px " height="10px"><b>GENDER</b></td>
                <td width="30px " height="10px"><b>PHONE NUMBER</b></td>
                <td width="30px " height="10px"><b>REG NUMBER</b></td>
                <td width="30px " height="10px"><b>EMAIL</b></td>
                <td width="30px " height="10px"><b>DEPARTMENT</b></td>
                <td width="30px " height="10px"><b>GUARDIAN</b></td>
                <td width="30px " height="10px"><b>GUARDIAN PHONE</b></td>
                <td width="30px " height="10px"><b>ACTION</b></td></tr>
                <?php
                $q=$db->query("SELECT * FROM student");
                while($row=$q->fetch(PDO::FETCH_OBJ))
                {
                  ?>
                  <tr>
                      <td><?= $row->std_id; ?></td>
                      <td><?= $row->first_name; ?></td>
                      <td><?= $row->last_name; ?></td>
                      <td><?= $row->gender; ?></td>
                      <td><?= $row->phone_number; ?></td>
                      <td><?= $row->reg_number; ?></td>
                      <td><?= $row->email; ?></td>
                      <td><?= $row->department; ?></td>
                      <td><?= $row->guardian; ?></td>
                      <td><?= $row->phone; ?></td>
                      <td><a href="updatestudent.php?std_id=<?= $row->std_id; ?>">UPDATE</a></td></tr>
                      
                <?php

                }
 
                 ?>
</table>
            </div>
            </div>
</form>
</body>
</html>