<?php
include('connection.php');
?>
<?php
if (isset($_GET['std_id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id = isset($_POST['std_id']) ? $_POST['std_id'] : NULL;
        $fname = isset($_POST['first_name']) ? $_POST['first_name'] : '';
        $lname = isset($_POST['last_name']) ? $_POST['last_name'] : '';
        $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
        $phone = isset($_POST['phone_number']) ? $_POST['phone_number'] : '';
        $number = isset($_POST['reg_number']) ? $_POST['reg_number'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $department = isset($_POST['department']) ? $_POST['department'] : '';
        $guardian = isset($_POST['guardian']) ? $_POST['guardian'] : '';
        $phoneg = isset($_POST['phone']) ? $_POST['phone] : '';

        $std = $pdo->prepare('UPDATE student SET std_id = ?, first_name = ?, last_name = ?, gender = ?, phone_number = ?, reg_number = ?, email = ?, department = ?, guardian = ?, phone = ? WHERE std_id = ?');
        $std->execute([$std_id,  $fname, $email, $lname, $gender, $phone, $number, $email,  $department, $guardian, $phoneg $_GET['std_id']]);
        $msg = 'Updated Successfully!';
    }
    $std = $pdo->prepare('SELECT * FROM student WHERE std_id = ?');
    $std->execute([$_GET['std_id']]);
    $student = $std->fetch(PDO::FETCH_ASSOC);
    if (!$student) {
        exit('student doesn\'t exist with that ID!');
    }
} else {
    exit('No ID specified!');
}
?>